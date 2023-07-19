<?php
session_start();
include "db/db.php";
include "header.php";

if (isset($_REQUEST['login'])) {

    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $result = "select * from customer where email='$email' && password='$pass'";
    $sql = mysqli_query($con, $result);
    $rowcount = mysqli_num_rows($sql);
    $_SESSION['email'] = $email;
    if ($rowcount == true) {
        header("Location: main.php");
    } else
        echo "<div class=bg>incorrect details</div>";
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/userlogin.css">
    <title>Login</title>
</head>

<body>
    <img class="bg" src="image/bg5restaurant6.jpg" alt="none">
    <div class="container">
        <h1>USER LOGIN</h1>
        <form id="fm">
            <div id="id">
                <label for="email" name="email">EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                <input type="email" name="email" id="email" placeholder=" enter email">
            </div>
            <br>
            <div id="id"> <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password" placeholder="enter password">
            </div>
            <br>
            <button class="button" name="login" id="btn">
                LOGIN
            </button>
            <br>
            <button class="button" id="btn"><a href="homepage.php">
                    BACK
                </a>
            </button>
        </form>
    </div>
</body>

</html>