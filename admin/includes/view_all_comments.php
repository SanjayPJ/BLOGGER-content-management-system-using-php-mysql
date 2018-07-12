<table class="table">
   <thead>
      <tr>
         <th>ID</th>
         <th>Author</th>
         <th>Comment</th>
         <th>Email</th>
         <th>Status</th>
         <th>In Resp. To</th>
         <th>Date</th>
         <th>Approve</th>
         <th>Unapprove</th>
         <th>Delete</th>
      </tr>
   </thead>
   <tbody>
      <tr>
      

        <?php 
        $posts = "SELECT * FROM comments";
        $result = mysqli_query($conn, $posts);
        if($result){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $comment_id = $row['comment_id'];
                    $comment_post_id = $row['comment_post_id'];
                    $comment_author = $row['comment_author'];
                    $comment_email = $row['comment_email'];
                    $comment_content = $row['comment_content'];
                    $comment_status = $row['comment_status'];
                    $comment_date = $row['comment_date'];

                    $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
                    $post_title_result = mysqli_query($conn, $query);

                    if($post_title_result){
                        while($row = mysqli_fetch_assoc($post_title_result)){
                            $post_title = $row['post_title'];
                        }
                    }
                    echo '<tr>
                         <th>'.$comment_id.'</th>
                         <td>'.$comment_author.'</td>
                         <td>'.substr($comment_content, 0, 150) . "..." .'</td>
                         <td>'.$comment_email.'</td>
                         <td>'.$comment_status.'</td>
                         <td><a href="../post.php?id='.$comment_post_id.'">'.$post_title.'</a></td>
                         <td>'.$comment_date.'</td>
                         <td><a href="comments.php?approve='.$comment_id.'&post_id='.$comment_post_id.'">Approve</a></td>
                         <td><a href="comments.php?unapprove='.$comment_id.'&post_id='.$comment_post_id.'">Unapprove</a></td>
                         <td><a href="comments.php?c_rm='.$comment_id.'&post_id='.$comment_post_id.'">Delete</a></td>
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