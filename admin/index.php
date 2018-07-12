<?php include 'includes/header.php'; ?>
<div id="wrapper">
    
    <!-- Navigation -->
    <?php include 'includes/navigation.php'; ?>
    
    <div id="page-wrapper">
        
        <div class="container-fluid">
            
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                        </li>
<!--                         <li class="active">
                            <i class="fa fa-fw fa-dashboard"></i> Blank Page
                        </li> -->
                    </ol>
                    
       
                <!-- /.row -->
                
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">

                                    <!-- calculating posts -->
                                    <?php 
                                    
                                    $post_count_query = "SELECT * FROM posts";
                                    $post_count_result = mysqli_query($conn, $post_count_query);
                                    $post_count = mysqli_num_rows($post_count_result);
                                    
                                    ?>

                                    <div class='huge'><?php echo $post_count; ?></div>
                                            <div>Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="posts.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                    <!-- count comments -->
                                    <?php 
                                    
                                    $post_count_query = "SELECT * FROM comments";
                                    $post_count_result = mysqli_query($conn, $post_count_query);
                                    $comment_count = mysqli_num_rows($post_count_result);
                                    
                                    ?>
                                        <div class='huge'><?php echo $comment_count; ?></div>
                                        <div>Comments</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="comments.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                    <?php 
                                    
                                    $post_count_query = "SELECT * FROM users";
                                    $post_count_result = mysqli_query($conn, $post_count_query);
                                    $user_count = mysqli_num_rows($post_count_result);
                                    
                                    ?>
                                        <div class='huge'><?php echo $user_count; ?></div>
                                            <div> Users</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="users.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-list fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                    <?php 
                                    
                                    $post_count_query = "SELECT * FROM catagories";
                                    $post_count_result = mysqli_query($conn, $post_count_query);
                                    $category_count = mysqli_num_rows($post_count_result);
                                    
                                    ?>
                                            <div class='huge'><?php echo $category_count; ?></div>
                                            <div>Categories</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="catagories.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px">
                     <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Data', 'Count'],

                            <?php 

                            $element_text = ['Active Posts', 'Categories', 'Users', 'Comments'];
                            $element_count = [$post_count, $category_count, $user_count, $comment_count];

                            for($i = 0; $i < 4; $i++){
                                echo "['".$element_text[$i]."','".$element_count[$i]."'],";
                            }

                            ?>
                            ]);

                            var options = {
                            chart: {
                                title: '',
                                subtitle: '',
                            }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                        </script>
                        <div id="columnchart_material" style="width: 100%; height: 500px;"></div>
                    </div>
                <!-- /.row -->
                </div>
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /.container-fluid -->
        
    </div>
    <!-- /#page-wrapper -->
    
</div>
<!-- /#wrapper -->
<?php include 'includes/footer.php'; ?>