
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

        <style>
            .comment-name{
                font-size: 18px !important;
                color: #202020;
                font-weight: 500;
            }
        </style>
        
    </head>
    
    <body>
        <!-- Preloader Start -->
        <div id="preloader">
            <div class="preload-content">
                <div id="world-load"></div>
            </div>
        </div>
        <!-- Preloader End -->

        <?php include 'includes/header.php'; ?>

         <?php 
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $posts = "SELECT * FROM posts WHERE post_id = $id;";
                $result = mysqli_query($conn, $posts);
                if($result){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $post_author = $row['post_author'];
                            $post_title = $row['post_title'];
                            $post_id = $row['post_id'];
                            $post_content = $row['post_content'];
                            $post_cat_id = $row['post_cat_id'];
                            $post_status = $row['post_status'];
                            $post_img = $row['post_img'];
                            $post_tag = $row['post_tag'];
                            $post_comment_count = $row['post_comment_count'];
                            $post_date = $row['post_date'];
                        }
                    }else{
                        $error_log = "There is no data in database.";
                    }
                }else{
                    $error_log = "Query failed";
                }
            }else{
                header("Location: index.php");
            }
        ?>

        <!-- ********** Hero Area Start ********** -->
        <!-- TODO: change the background image -->

        <div class="hero-area height-600 bg-img background-overlay" style="background-image: url( <?php echo $post_img; ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="single-blog-title text-center">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#"><?php echo $post_status; ?></a></div>
                            <h3><?php echo $post_title; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ********** Hero Area End ********** -->
        
        <div class="main-content-wrapper section-padding-100" style="padding-bottom: 0">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- ============= Post Content Area ============= -->
                    <div class="col-12 col-lg-8">
                        <div class="single-blog-content">
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author"><?php echo $post_author; ?></a> on <a href="#" class="post-date"><?php echo $post_date ?></a></p>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <h6><?php echo $post_content; ?></h6>
                                <!-- Post Tags -->
                                <ul class="post-tags">
                                    <li><a href="#"><?php echo $post_tag; ?></a></li>
                                </ul>
                                <!-- Post Meta -->
                                <div class="post-meta second-part">
                                    <p><a href="#" class="post-author"><?php echo $post_author; ?></a> on <a href="#" class="post-date"><?php echo $post_date ?></a></p>                                
                                </div>
                            </div>
                        </div>

                        <!-- commenting section start here -->

                        <div class="post-a-comment-area mt-70">
                            <h5>What do you think ?</h5>
                            <!-- Contact Form -->
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="text" name="comment_author" id="name" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Enter your name</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="group">
                                            <input type="email" name="comment_email" id="email" required>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Enter your email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="group">
                                            <textarea name="comment_content" id="message" required></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar"></span>
                                            <label>Enter your comment</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button name="comment_submit" type="submit" class="btn world-btn">Post comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- comment section actions there -->

                        <?php 

                            if(isset($_POST['comment_submit'])){

                                $comment_author = $_POST['comment_author'];
                                $comment_email = $_POST['comment_email'];
                                $comment_content = $_POST['comment_content'];
                                // $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) VALUES ( $id , '$comment_author', '$comment_email', '$comment_content', 'unapproved', now())";

                                $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date) VALUES ( $id , '$comment_author', '$comment_email', \"$comment_content\", 'unapproved',now())";

                                $result = mysqli_query($conn, $query);

                                if(!$result){
                                    echo "<div class='alert alert-danger' style='margin-top: 10px;'>Comment request failed ". mysqli_error($conn) ."</div>";
                                }else{
                                    echo "<div class='alert alert-success' style='margin-top: 10px;'>Comment request successfull</div>";
                                }
                            }

                        ?>

                        <?php 
                            
                        $query = "SELECT * FROM comments WHERE comment_post_id = $id AND comment_status = 'approve' ORDER BY comment_id DESC";
                        $result = mysqli_query($conn, $query);

                        if(!$result){
                            echo "<div class='alert alert-danger'>Comment loading failed.</div>";
                        }else{
                            while($row = mysqli_fetch_assoc($result)){
                                $comment_date = $row['comment_date'];
                                $comment_content = $row['comment_content'];
                                $comment_email = $row['comment_email'];
                                $comment_author = $row['comment_author'];
                                ?>

                                <div>
                                    <div class="alert alert-info" role="alert" style="margin-top: 10px;">
                                        <p><span class="comment-name"><?php echo $comment_author; ?></span> on <a href="#" class="post-date"><?php echo $comment_date ?></a></p>
                                        <hr>
                                        <p class="text-justify"><?php echo $comment_content; ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            if(mysqli_num_rows($result)  < 1){
                                echo "<div class='alert alert-danger' style='margin-top: 10px;'>No comments yet.</div>";
                            }
                        }

                        ?>

                        
                    </div>
                    
                    <!-- ========== Sidebar Area ========== -->
                    <?php include 'includes/sidebar.php'; ?>
                </div>
            </div>
            <br><br>

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