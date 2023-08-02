<?php
$login = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    $exists = false;

    $sql = "select *from `users` where username = '$username' and password = '$password';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        session_start();
        $login = 1;
        $_SESSION['username'] = $username;
        $_SESSION['login'] = true;
        header("location: user.php");
    } else {
        $login = 2;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VmUsic | Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="./script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="main">
        <div class="form">
            <div class="login">
                <form action="./user.php" method="post" autocomplete="off" id="myForm">
                    <h2><a href="#user">Login | VmUsic</a></h2>
                    <table class="table">
                        <tr>
                            <td><label>UserName</label><span>*</span></td>
                            <td><input type="text" name="user" id="user" placeholder="Enter UserName"></td>
                        </tr>
                        <tr>
                            <td><label>Password </label><span>*</span></td>
                            <td><input type="password" name="password" placeholder="Enter Password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Login"></td>
                        </tr>
                        <tr>
                            <td> <label>Don't have any?</label> <a href="./create.php">Create One</a></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>