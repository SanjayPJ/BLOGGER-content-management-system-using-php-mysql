 <table class="table">
   <thead>
      <tr>
         <th>ID</th>
         <th>Author</th>
         <th>Title</th>
         <th>Catagory</th>
         <th>status</th>
         <th>Image</th>
         <th>Tags</th>
         <th>Comments</th>
         <th>Date</th>
         <th></th>
      </tr>
   </thead>
   <tbody>
      <tr>
      

        <?php 
        $posts = "SELECT * FROM posts";
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
                    $post_comment_count = $row['post_comment_count'];
                    $post_date = $row['post_date'];

                    $catagories = "SELECT * FROM catagories WHERE cat_id=$post_cat_id";
                    $cat_result = mysqli_query($conn, $catagories);
                    if($result){
                        if(mysqli_num_rows($cat_result) > 0){
                            while ($row = mysqli_fetch_assoc($cat_result)) {
                                $cat_title = $row['cat_title'];
                            }
                        }else{
                            echo "There is no such data in Database.";
                        }
                    }else{
                        echo "Query error " . mysqli_error($conn);
                    }

                    echo '<tr>
                         <th>'.$post_id.'</th>
                         <td>'.$post_author.'</td>
                         <td>'.$post_title.'</td>
                         <td>'.$cat_title.'</td>
                         <td>'.$post_status.'</td>
                         <td><img width="50px" src="../'.$post_img.'"></td>
                         <td>' . $post_tag . '</td>
                         <td>'.$post_comment_count.'</td>
                         <td>' . $post_date . '</td>
                         <td><a href="posts.php?source=edit_post&post_id='.$post_id.'">Edit</a></td>
                         <td><a href="posts.php?rm='.$post_id.'">Delete</a></td>
                         </tr>';
                }
            }else{
                $error_log = "There is no data in database.";
            }
        }else{
            $error_log = "Query failed";
        }
        ?>
      </tr>
   </tbody>
</table>