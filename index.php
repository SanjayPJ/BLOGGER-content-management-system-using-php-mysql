
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title  -->
        <title>Blogger - Blog &amp; Magazine Template</title>
        
        <!-- Favicon  -->
        <link rel="icon" href="img/core-img/favicon.ico">
        
        <!-- Style CSS -->
        <link rel="stylesheet" href="style.css">
        
    </head>
    
    <body>
        <!-- Preloader Start -->
        <div id="preloader">
            <div class="preload-content">
                <div id="Blogger-load"></div>
            </div>
        </div>
        <!-- Preloader End -->
        
        <!-- ***** Header Area Start ***** -->

        <?php include 'includes/header.php'; ?>
        
        <!-- ********** Hero Area Start ********** -->
        <div class="hero-area">
            
            <!-- Hero Slides Area -->
            <div class="hero-slides owl-carousel">
                <!-- Single Slide -->
                <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg2.jpg);"></div>
                <!-- Single Slide -->
                <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/bg1.jpg);"></div>
            </div>
            
            <!-- Hero Post Slide -->
            <div class="hero-post-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-post-slide">
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>1</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                    </div>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>2</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                    </div>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>3</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                    </div>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-slide d-flex align-items-center">
                                    <div class="post-number">
                                        <p>4</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********** Hero Area End ********** -->
        
        <div class="main-content-wrapper section-padding-100">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- ============= Post Content Area Start ============= -->
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Latest Articles</h5>
                            <hr><br>
                        </div>
                        <?php 
                        if(isset($_GET['search'])){
                            $search = $_GET['search'];
                            $search_query = "SELECT * FROM posts WHERE  post_tag LIKE '%$search%' AND post_status = 'publish'";
                            $search_result = mysqli_query($conn, $search_query);

                            if($search_result){
                                if (mysqli_num_rows($search_result) > 0) {
                                    $search_reply = "<span class='text-success'>" . mysqli_num_rows($search_result) . " items found." . "</span>";
                                }else{
                                    echo "<h3>Oops, Nothing found.</h3>";
                                }
                            }else{
                                $error_log = "query error";
                            }
                        }

                        $posts = "SELECT * FROM posts WHERE post_status = 'publish'";
                        $result = mysqli_query($conn, $posts);
                        if(isset($search_result)){
                            $result = $search_result;
                        }
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail"><a href="post.php?id='.$row['post_id'].'">
                                            <img src="'. $row['post_img'] .'" alt=""></a>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="post.php?id='.$row['post_id'].'" class="headline">
                                                <h5>'.$row['post_title'].'</h5>
                                            </a>
                                            <p>'.substr($row['post_content'], 0, 150).'...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">'.$row['post_author'].'</a> on <a href="#" class="post-date">'.$row['post_date'].'</a></p>
                                            </div>
                                        </div>
                                    </div>';
                                }
                            }else{
                                echo "<h6>There is no posts in database.<h6>";
                            }
                        }else{
                            $error_log = "Query failed";
                        }

                        ?>

                        <!-- Load More btn -->
                        <div class="row">
                            <div class="col-12">
                                <div class="load-more-btn mt-50 text-center">
                                    <a href="#" class="btn world-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ========== Sidebar Area ========== -->
                    <?php include 'includes/sidebar.php'; ?>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        
        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
        
    </body>
    
</html>