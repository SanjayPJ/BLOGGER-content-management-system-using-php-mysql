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
                        <li class="active">
                            <i class="fa fa-book"></i> Posts
                        </li>
                    </ol>
                    <?php

                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }else{
                        $source = "";
                    }
                    switch ($source) {
                        case 'add_post':
                            include 'includes/add_post.php';
                            break;

                        case 'edit_post':
                            include 'includes/edit_post.php';
                            break;
                        
                        default:
                            if(isset($_GET['rm'])){
                                $id = $_GET['rm'];
                                $query = "DELETE FROM posts WHERE post_id=$id";
                                $delete_result = mysqli_query($conn, $query);
                                if($delete_result){
                                    echo "<div class='alert alert-success'>Post deleted succesfully</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>Post deleted failed ".mysqli_error($conn)."</div>";
                                }
                            }
                            include 'includes/view_all_posts.php';
                            break;
                    }
                    ?>                   
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