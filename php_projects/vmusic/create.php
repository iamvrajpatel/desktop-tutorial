<?php

$alert = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'partials/dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($password == $cpassword) {

        $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$username', '$password');";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $alert = 1;
        }
    } else {
        $alert = 2;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/create.css">
    <title>VmUsic | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="main">
        <?php
        require 'partials/nav.php';
        ?>

        <?php
        if ($alert == 1) {
            echo '<div class="alert alert-success" role="alert">
            Successfully Created! <a href="./login.php" class="alert-link">Click here! </a> to login.
        </div>';
        }
        if ($alert == 2) {
            echo '<div class="alert alert-danger    " role="alert">
        Both the passwords are not same! Please try again!
        </div>';
        }
        ?>
        <div class="form">
            <div class="login">
                <form action="" method="post" id="myForm" autocomplete="off">
                    <h2><a href="#user">VmUsic | Sign Up</a></h2>
                    <table class="table">
                        <tr>
                            <td><label>UserName</label><span>*</span></td>
                            <td><input type="text" id="user" name="username" placeholder="Enter UserName" /></td>
                        </tr>
                        <tr>
                            <td><label>Password</label><span>*</span></td>
                            <td><input type="password" name="password" placeholder="Enter Password" /></td>
                        </tr>
                        <tr>
                            <td><label>Confirm Password</label><span>*</span></td>
                            <td><input type="password" name="cpassword" placeholder="Enter Password" /></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Register" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>