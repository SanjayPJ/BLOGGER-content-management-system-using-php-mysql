<?php 

include "db_connect.php";
session_start();

$form_username = $_POST['username'];
$form_password = $_POST['user_password'];
$clean_form_username = mysqli_real_escape_string($conn, $form_username);
$clean_form_password = mysqli_real_escape_string($conn, $form_password);

$query = "SELECT * FROM users WHERE username = '$clean_form_username'";
$result = mysqli_query($conn, $query);
if($result){
    while($row = mysqli_fetch_assoc($result)){
        
        $db_username = $row['username'];
        $db_user_password = $row['user_password'];
        $db_user_firstname = $row['user_firstname'];
        $db_user_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
        
        
        if($form_username == $db_username && $form_password == $db_user_password){
            
            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['role'] = $db_user_role;
            
            header("Location: ../admin");
        }else{
            header("Location: ../index.php?login_status=failed");
        }
    }    
}else{
    $error_flag = "Query error. " . mysqli_error($conn);
}
?>