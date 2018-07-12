
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
                            <i class="fa fa-tags"></i> Catagories
                        </li>
                    </ol>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            delete_catagories();
                            ?>
                            <table class="table table-striped">
                             <thead> 
                                <tr> 
                                    <th>ID</th> <th>Catagory title</th> 
                                </tr> 
                            </thead> 
                                <tbody> 
                                    <?php
                                    //creating table
                                    display_catagories();

                                    ?>
                                </tbody> 
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <!-- add form -->
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="form-group" style="margin-bottom: 10px;">
                                    <label for="exampleInputEmail1">Add Catagory</label>
                                    <input name="cat_name" type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <?php 
                                create_catagories();
                                ?>
                                <button name="add_cat_submit" type="submit" class="btn btn-primary" style="width: 100%">Add Catagory</button>
                            </form>
                            <!-- update form -->
                           <?php include 'includes/update_catagories.php'; ?>
                        </div>
                    </div>
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