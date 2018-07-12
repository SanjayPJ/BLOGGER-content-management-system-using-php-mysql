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
                            <i class="fa fa-book"></i> Users
                        </li>
                    </ol>
                    <?php

                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    }else{
                        $source = "";
                    }
                    switch ($source) {
                        case 'add_user':
                            include 'includes/add_user.php';
                            break;

                        case 'edit_user':
                            include 'includes/edit_user.php';
                            break;
                        
                        default:
                            if(isset($_GET['u_rm'])){
                                $user_id = $_GET['u_rm'];
                                $query = "DELETE FROM users WHERE user_id=$user_id";
                                $delete_result = mysqli_query($conn, $query);
                                if($delete_result){
                                    echo "<div class='alert alert-success'>User deleted succesfully</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>User delete failed ".mysqli_error($conn)."</div>";
                                }
                            }
                            if(isset($_GET['change_to_admin'])){
                                $approve_id = $_GET['change_to_admin'];
                                $query = "UPDATE users SET user_role = 'admin' WHERE user_id=$approve_id";
                                $delete_result = mysqli_query($conn, $query);
                                if($delete_result){
                                    echo "<div class='alert alert-success'>User role update succesfully</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>User role update failed. ".mysqli_error($conn)."</div>";
                                }
                            }
                            if(isset($_GET['change_to_subscriber'])){
                                $approve_id = $_GET['change_to_subscriber'];
                                $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id=$approve_id";
                                $delete_result = mysqli_query($conn, $query);
                                if($delete_result){
                                    echo "<div class='alert alert-success'>User role update succesfully</div>";
                                }else{
                                    echo "<div class='alert alert-danger'>User role update failed. ".mysqli_error($conn)."</div>";
                                }
                            }
                            include 'includes/view_all_users.php';
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