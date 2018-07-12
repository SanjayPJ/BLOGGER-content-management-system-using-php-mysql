<table class="table">
   <thead>
      <tr>
         <th>ID</th>
         <th>Username</th>
         <th>Firstname</th>
         <th>Lastname</th>
         <th>Email</th>
         <th>Role</th>
         <th>Admin</th>
         <th>Subscriber</th>
         <th>Edit</th>
         <th>Delete</th>
      </tr>
   </thead>
   <tbody>
      <tr>
      
        <?php 
        $posts = "SELECT * FROM users";
        $result = mysqli_query($conn, $posts);
        if($result){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

                    $user_id = $row['user_id'];
                    $username = $row['username'];
                    $user_password = $row['user_password'];
                    $user_firstname = $row['user_firstname'];
                    $user_lastname = $row['user_lastname'];
                    $user_email = $row['user_email'];
                    $user_image = $row['user_image'];
                    $user_role = $row['user_role'];
                    
                    
                    echo '<tr>
                         <td>'.$user_id.'</td>
                         <td>'.$username.'</td>
                         <td>'.$user_firstname.'</td>
                         <td>'.$user_lastname.'</td>
                         <td>'.$user_email.'</td>
                         <td>'.$user_role.'</td>
                         <td><a href="users.php?change_to_admin='.$user_id.'">Admin</a></td>
                         <td><a href="users.php?change_to_subscriber='.$user_id.'">Subscriber</a></td>
                         <td><a href="users.php?source=edit_user&user_id='.$user_id.'">Edit</a></td>
                         <td><a href="users.php?u_rm='.$user_id.'">Delete</a></td>
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