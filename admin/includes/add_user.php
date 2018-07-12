
<form action="users.php?source=add_user" enctype="multipart/form-data" method="post" >
    <div class="form-group">
        <label >Firstname</label>
        <input name="user_firstname" type="text" class="form-control" required="required">
    </div>
    <div class="form-group">
        <label >Lastname</label>
        <input name="user_lastname" type="text" class="form-control" required="required">
    </div>
    <div class="form-group">
        <label >Role</label>
        <select class="form-control" required="required" name="user_role">
          <option value="admin">Admin</option>
          <option value="subscriber">Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label >Username</label>
        <input name="username" type="text" class="form-control" required="required">
    </div>
    <div class="form-group">
        <label >Email</label>
        <input name="user_email" type="email" class="form-control" required="required">
    </div>
<!--
    <div class="form-group">
        <label>User Image</label>
        <input name="user_image" type="file" required="required">
    </div>
-->
    <div class="form-group">
        <label >Password</label>
        <input name="user_password" type="text" class="form-control">
    </div>

    <?php 
    if(isset($_POST['create_user'])){
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role = $_POST['user_role'];
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        
        $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password ) VALUES('$user_firstname','$user_lastname', '$user_role', '$username', '$user_email', '$user_password')";
        $add_user_result = mysqli_query($conn, $query);
        if($add_user_result){
            echo "<div class='alert alert-success'>User added successfully</div>";
        }else{
            echo "<div class='alert alert-danger'>user add failed" . mysqli_error($conn) . "</div>";
        }
    }
    ?>

    <button name="create_user" type="submit" class="btn btn-primary" style="width: 100%">Add User</button>
</form>