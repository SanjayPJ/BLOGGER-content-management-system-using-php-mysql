<div class="col-12 col-md-8 col-lg-4">
    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
        <!-- search area -->

        <form action="index.php" method="get">
            <div class="sidebar-widget-area">
                <h5 class="title">Search and find</h5>
                <div class="widget-content">
                  <div class="input-group mb-3">
                  <input type="text" name="search" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                  </div>
                </div> 
                <?php 
                if(isset($search_reply)){
                    echo $search_reply;
                }
                ?>              
                </div>
            </div>
        </form>

        <div class="sidebar-widget-area">
            <h5 class="title">Catagories</h5>
            <div class="widget-content">
                <ul class="list-inline text-justify">
                    <?php

                    $catagories = "SELECT * FROM catagories LIMIT 20";
                    $result = mysqli_query($conn, $catagories);
                    if($result){
                        if(mysqli_num_rows($result) > 0){
                            echo '<li class="list-inline-item"><a href="index.php?search=">'. "All" .'</a></li>';
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<li class="list-inline-item text-capitalize"><a href="index.php?search='. $row['cat_title'] .'">'. $row['cat_title'] .'</a></li>';
                            }
                        }else{
                            $error_log = "There is no data in database.";
                        }
                    }else{
                        $error_log = "Query failed";
                    }

                    ?>
                </ul>
            </div>
        </div>

        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">Top Stories</h5>
            <div class="widget-content">
                <!-- Single Blog Post -->
                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b11.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="headline">
                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                        </a>
                    </div>
                </div>
                <!-- Single Blog Post -->
                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b13.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="headline">
                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                        </a>
                    </div>
                </div>
                <!-- Single Blog Post -->
                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b14.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="headline">
                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                        </a>
                    </div>
                </div>
                <!-- Single Blog Post -->
                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b10.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="headline">
                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                        </a>
                    </div>
                </div>
                <!-- Single Blog Post -->
                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="img/blog-img/b12.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <a href="#" class="headline">
                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-widget-area">
            <h5 class="title">About Blogger</h5>
            <div class="widget-content">
                <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</p>
            </div>
        </div>
        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">Stay Connected</h5>
            <div class="widget-content">
                <div class="social-area d-flex justify-content-between">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
        <!-- Widget Area -->
    </div>
</div>