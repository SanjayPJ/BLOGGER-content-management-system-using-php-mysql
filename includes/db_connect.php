<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'blogger';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$conn){
    echo "Database connection failed";
}

?>