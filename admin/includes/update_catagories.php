 <?php
if(isset($_GET['edit'])){
    $pre_cat_id = $_GET['edit'];
    $catagories = "SELECT * FROM catagories WHERE cat_id=$pre_cat_id";
    $result = mysqli_query($conn, $catagories);
    if($result){
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                $pre_cat_title = $row['cat_title'];
                $pre_cat_id = $row['cat_id'];
            }
        }else{
            echo "There is no such data in Database.";
        }
    }else{
        echo "Query error " . mysqli_error($conn);
    }
}
if(isset($_POST["update_cat_submit"])){                                   
    if($_POST['edit_cat_name'] == "" || empty($_POST['edit_cat_name'])){
        echo "<div class='alert alert-danger''>Empty Catagories are not allowed.</div>";
    }else{
        $edit_cat_name = $_POST['edit_cat_name'];
        $edit_cat_id = $_POST['pre_cat_id'];
        $query = "UPDATE catagories SET cat_title='$edit_cat_name', cat_id='$edit_cat_id' WHERE cat_id='$edit_cat_id'";
        $create_cat = mysqli_query($conn , $query);
        if($create_cat){
            echo  "<div class='alert alert-success'>Catagory updated successfully.</div>";
            header("Location: catagories.php");
        }else{
            echo  "<div class='alert alert-danger''>Catagory updating failed. </div>" . mysqli_error($conn);
            header("Location: catagories.php");
        }
    }
}

if (isset($pre_cat_title)){
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="padding-top: 10px;">
    <div class="form-group" style="margin-bottom: 10px;">
        <label for="exampleInputEmail1">Update Catagory</label>
        <input name="pre_cat_id" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $pre_cat_id; ?>">
        <input style="margin-top: 10px" name="edit_cat_name" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $pre_cat_title; ?>">
    </div>
    <?php

    ?>
    <button name="update_cat_submit" type="submit" class="btn btn-primary" style="width: 100%">Update Catagory</button>
</form>
<?php
}
?>