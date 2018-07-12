<?php 
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    
    $result = mysqli_query($conn, $query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_role = $row['user_role'];
            $username = $row['username'];
            $user_email = $row['user_email'];
            $user_password = $row['user_password'];
        }      
    }else{
        echo "Query failed " . mysqli_error($conn); 
    }
    
    
    
    
}else{
    header("Location: users.php");
}
?>
<form action="" enctype="multipart/form-data" method="post" >
    <div class="form-group">
        <label >Firstname</label>
        <input name="user_firstname" type="text" class="form-control" required="required" value="<?php echo $user_firstname; ?>">
    </div>
    <div class="form-group">
        <label >Lastname</label>
        <input name="user_lastname" type="text" class="form-control" required="required" value="<?php echo $user_lastname; ?>">
    </div>
    <div class="form-group">
        <label >Role</label>
        <select class="form-control" required="required" name="user_role">
          <option value="admin" <?php if($user_role == "admin"){
                echo "selected";
            }?>>Admin</option>
          <option value="subscriber"<?php if($user_role == "subscriber"){
                echo "selected";
            }?>>Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label >Username</label>
        <input name="username" type="text" class="form-control" required="required" value="<?php echo $username; ?>">
    </div>
    <div class="form-group">
        <label >Email</label>
        <input name="user_email" type="email" class="form-control" required="required" value="<?php echo $user_email; ?>">
    </div>
<!--
    <div class="form-group">
        <label>User Image</label>
        <input name="user_image" type="file" required="required">
    </div>
-->
    <div class="form-group">
        <label >Password</label>
        <input name="user_password" type="text" class="form-control" value="<?php echo $user_password; ?>">
    </div>

    <?php 
    if(isset($_POST['update_user'])){
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role = $_POST['user_role'];
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        
        $query = "UPDATE users SET user_firstname='$user_firstname', user_lastname='$user_lastname', user_role='$user_role', username='$username', user_email='$user_email', user_password='$user_password' WHERE user_id = $user_id";
        $add_user_result = mysqli_query($conn, $query);
        if($add_user_result){
            echo "<div class='alert alert-success'>User updated successfully</div>";
        }else{
            echo "<div class='alert alert-danger'>user update failed" . mysqli_error($conn) . "</div>";
        }
    }
    ?>

    <button name="update_user" type="submit" class="btn btn-primary" style="width: 100%">Update User</button>
</form>