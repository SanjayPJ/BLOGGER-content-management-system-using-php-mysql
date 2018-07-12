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
                        default:
                            if(isset($_GET['c_rm'])){
                                $post_id = $_GET['post_id'];
                                $id = $_GET['c_rm'];
                                $query = "DELETE FROM comments WHERE comment_id=$id";
                                $delete_result = mysqli_query($conn, $query);
                                if($delete_result){
                                    echo "<div class='alert alert-success'>Comment deleted succesfully</div>";
                                    $update_query = "UPDATE posts SET post_comment_count = post_comment_count - 1 WHERE post_id = $post_id";
                                    mysqli_query($conn, $update_query);
                                }else{
                                    echo "<div class='alert alert-danger'>Comment deleted failed ".mysqli_error($conn)."</div>";
                                }
                            }
                            if(isset($_GET['approve'])){
                                $approve_id = $_GET['approve'];
                                $post_id = $_GET['post_id'];
                                $query = "UPDATE comments SET comment_status = 'approve' WHERE comment_id=$approve_id";
                                $delete_result = mysqli_query($conn, $query);
                                if($delete_result){
                                    $update_query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = $post_id";
                                    mysqli_query($conn, $update_query);
                                    echo "<div class='alert alert-success'>Comment approved succesfully</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>Comment approve failed ".mysqli_error($conn)."</div>";
                                }
                            }
                            if(isset($_GET['unapprove'])){
                                $post_id = $_GET['post_id'];
                                $unapprove_id = $_GET['unapprove'];
                                $query = "UPDATE comments SET comment_status = 'unapprove' WHERE comment_id=$unapprove_id";
                                $delete_result = mysqli_query($conn, $query);
                                if($delete_result){
                                    echo "<div class='alert alert-success'>Comment unapproved succesfully</div>";
                                    $update_query = "UPDATE posts SET post_comment_count = post_comment_count - 1 WHERE post_id = $post_id";
                                    mysqli_query($conn, $update_query);
                                }else{
                                    echo "<div class='alert alert-danger'>Comment unapprove failed ".mysqli_error($conn)."</div>";
                                }
                            }
                            include 'includes/view_all_comments.php';
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