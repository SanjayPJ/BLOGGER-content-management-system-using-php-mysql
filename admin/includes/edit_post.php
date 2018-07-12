<?php 
if(isset($_GET['post_id'])){
    $id = $_GET['post_id'];
    $posts = "SELECT * FROM posts WHERE post_id=$id";
    $result = mysqli_query($conn, $posts);
    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $post_id = $row['post_id'];
                $post_author = $row['post_author'];
                $post_title = $row['post_title'];
                $post_id = $row['post_id'];
                $post_cat_id = $row['post_cat_id'];
                $post_status = $row['post_status'];
                $post_img = $row['post_img'];
                $post_tag = $row['post_tag'];
                $post_content = $row['post_content'];
                $post_date = $row['post_date'];
            }
        }else{
            $error_log = "There is no data in database.";
        }
    }else{
        $error_log = "Query failed";
    }
}else{
    header("Location: posts.php");
}

?>
<form action="" enctype="multipart/form-data" method="post" >
    <div class="form-group">
        <label >Post Title</label>
        <input value="<?php echo $post_title; ?>" name="post_title" type="text" class="form-control" required="required">
    </div>
    <div class="form-group">
        <label >Post Catagory</label>
        <select class="form-control" required="required" name="post_cat_id">

          <?php 
                $catagories = "SELECT * FROM catagories";
                $result = mysqli_query($conn, $catagories);
                if($result){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_title']; ?></option>
                            <?php
                        }
                    }else{
                        $error_log = "There is no data in database.";
                    }
                }else{
                    $error_log = "Query failed";
                }
          ?>
        </select>
    </div>
    <div class="form-group">
        <label >Post Author</label>
        <input value="<?php echo $post_author; ?>"  name="post_author" type="text" class="form-control" required="required">
    </div>
    <div class="form-group">
        <label >Post Status</label>
        <select class="form-control" required="required" name="post_status">
          <option value="draft" <?php if($post_status == "draft"){
            echo "selected";
          } ?>>Draft</option>
          <option value="publish" <?php if($post_status == "publish"){
            echo "selected";
          } ?>>Publish</option>
        </select>
    </div>
    <div class="form-group">
        <label>Post Image</label><br>
        <img src="<?php echo "../" . $post_img ?>" alt="" height="100px;" style='margin-bottom: 10px;'>           
        <input name="post_img" type="file" required="required">
    </div>
    <div class="form-group">
        <label >Post Tags</label>
        <input value="<?php echo $post_tag; ?>"  name="post_tags" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label >Post Content</label>
        <textarea name="post_content" class="form-control" rows="3" required="required"><?php echo $post_content; ?></textarea>
    </div>
    <?php 

    if(isset($_POST['update_post'])) {
        $post_title = $_POST['post_title'];
        $post_author = $_POST['post_author'];
        $post_cat_id = $_POST['post_cat_id'];
        $post_status = $_POST['post_status'];
        $post_img = $_FILES['post_img']['name'];
        $post_img_temp = $_FILES['post_img']['tmp_name'];
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
        $post_img_dir = "img/blog-img/" . $post_img;

        move_uploaded_file($post_img_temp, "../img/blog-img/$post_img");
        $query = "UPDATE posts SET post_cat_id = '$post_cat_id', post_title = '$post_title', post_author = '$post_author', post_date = now(), post_img = '$post_img_dir', post_content = \"$post_content\", post_tag = '$post_tags', post_status = '$post_status' WHERE post_id = $id";
        $add_post_result = mysqli_query($conn, $query);

        if($add_post_result){
            echo "<div class='alert alert-success'>Post updated successfully</div>";
        }else{
            echo "<div class='alert alert-danger'>post update failed " . mysqli_error($conn) . "</div>";
        }
    }

    ?>
    <button name="update_post" type="submit" class="btn btn-primary" style="width: 100%">Update Post</button>
</form>