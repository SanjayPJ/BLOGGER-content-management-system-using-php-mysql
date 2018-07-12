
<?php 

function create_catagories(){

    global $conn;
    if(isset($_POST["add_cat_submit"])){
        if($_POST['cat_name'] == "" || empty($_POST['cat_name'])){
            echo "<div class='alert alert-danger''>This field should not be empty.</div>";
        }else{
            $cat_name = $_POST['cat_name'];
            $query = "INSERT INTO catagories(cat_title) VALUES ('$cat_name')";
            $create_cat = mysqli_query($conn , $query);
            if($create_cat){
                echo "<div class='alert alert-success'>Catagory created successfully.</div>";
            }else{
                echo "<div class='alert alert-danger'>Catagory creating failed. </div>" . mysqli_error($conn);
            }
        }
    }
}

function display_catagories(){

    global $conn;
    $catagories = "SELECT * FROM catagories";
    $result = mysqli_query($conn, $catagories);
    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr> 
                        <th>'. $row['cat_id'] .'</th> 
                        <td>' . $row['cat_title'] . '</td>
                        <td><a href="catagories.php?rm=' . $row['cat_id'] . '">Delete</a></td>
                        <td><a href="catagories.php?edit=' . $row['cat_id'] . '">Edit</a></td>
                    </tr>';
            }
        }else{
            $error_log = "There is no data in database.";
        }
    }else{
        $error_log = "Query failed";
    }
}

function delete_catagories(){

    global $conn;
    if(isset($_GET['rm'])){
        $id = $_GET['rm'];
        $query = "DELETE FROM catagories WHERE cat_id=$id";
        $result = mysqli_query($conn, $query);
        if($result){
            header("Location: catagories.php");
        }else{
            echo "<span class='text-danger''>Catagory delete failed. ". mysqli_error($conn) ."</span>";
        }
    }
}

?>