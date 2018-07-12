
<form action="posts.php?source=add_post" enctype="multipart/form-data" method="post" >
    <div class="form-group">
        <label >Post Title</label>
        <input name="post_title" type="text" class="form-control" required="required">
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
        <input name="post_author" type="text" class="form-control" required="required">
    </div>
    <div class="form-group">
        <label >Post Status</label>
        <select class="form-control" required="required" name="post_status">
          <option value="draft">Draft</option>
          <option value="publish">Publish</option>
        </select>
    </div>
    <div class="form-group">
        <label>Post Image</label>
        <input name="post_img" type="file" required="required">
    </div>
    <div class="form-group">
        <label >Post Tags</label>
        <input name="post_tags" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label >Post Content</label>
        <textarea name="post_content" class="form-control" rows="3" required="required"></textarea>
    </div>

    <?php 
    if(isset($_POST['create_post'])){
        $post_title = $_POST['post_title'];
        $post_author = $_POST['post_author'];
        $post_cat_id = $_POST['post_cat_id'];
        $post_status = $_POST['post_status'];
        $post_img = $_FILES['post_img']['name'];
        $post_img_temp = $_FILES['post_img']['tmp_name'];
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
        $post_comment_count = 0;
        $post_img_dir = "img/blog-img/" . $post_img;

        move_uploaded_file($post_img_temp, "../img/blog-img/$post_img");
        $query = "INSERT INTO posts(post_cat_id, post_title, post_author,post_date, post_img, post_content, post_tag, post_comment_count, post_status ) VALUES($post_cat_id,'$post_title', '$post_author', now(), '$post_img_dir', \"$post_content\", '$post_tags', '$post_comment_count', '$post_status')";
        $add_post_result = mysqli_query($conn, $query);
        if($add_post_result){
            echo "<div class='alert alert-success'>Post added successfully</div>";
        }else{
            echo "<div class='alert alert-danger'>post adding failed" . mysqli_error($conn) . "</div>";
        }
    }
    ?>

    <button name="create_post" type="submit" class="btn btn-primary" style="width: 100%">Publish Post</button>
</form>