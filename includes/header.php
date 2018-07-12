<?php include 'db_connect.php'; ?>

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt="Logo"></a>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active" style="padding-right: 10px;">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown" style="padding-right: 10px;">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catagories</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <?php

                                    $catagories = "SELECT * FROM catagories LIMIT 5";
                                    $result = mysqli_query($conn, $catagories);
                                    if($result){
                                        echo '<a class="dropdown-item text-capitalize" href="'. "index.php?search=" . '">'. "All" .'</a>';
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo '<a class="dropdown-item text-capitalize" href="'. "index.php?search=" . $row['cat_title'] .'">'. $row['cat_title'] .'</a>';
                                            }
                                        }else{
                                            $error_log = "There is no data in database.";
                                        }
                                    }else{
                                        $error_log = "Query failed";
                                    }
                                    ?>
                                </div>
                            </li>
                            <div class="dropdown">
                                <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Log In
                              </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <form class="px-3 py-2" style="font-size: 14px; width: 300px" method="post" action="includes/login.php">
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Username</label>
                                            <input name="username" type="text" class="form-control form-control-sm" id="exampleDropdownFormEmail1" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormPassword1">Password</label>
                                            <input name="user_password" type="password" class="form-control form-control-sm" id="exampleDropdownFormPassword1" placeholder="Password">
                                        </div>
                                        <?php 
                                        
                                        if(isset($_GET['login_status'])){
                                            if($_GET['login_status'] == 'failed'){
                                                echo "<div class='alert alert-danger'>Login failed</div>";
                                            }
                                        }                                        
                                        
                                        ?>
                                        <button type="submit" class="btn btn-sm btn-primary w-100">Log In</button>
                                    </form>
                                </div>
                            </div>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Lifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
