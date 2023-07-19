<?php
include "db/db.php";
include "header.php";
?>

<html lang="en">

<head>
    <link rel="stylesheet" href="styles/registration.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <img class="bg" src="image/bg5restaurant6.jpg" alt="none">
    <div class="container">

        <h1>Welcome to our restaurant, fill the form to register</h1>
        <h3 style="text-align: center;
    margin-bottom: -94px;
    margin-top: 10px;
    color: yellow;">

            <?php

            if (isset($_REQUEST['submit'])) {

                if (($_REQUEST['email'] == "") || $_REQUEST['password'] == "") {
                    echo "Please fill Email and Password";
                } else {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $name = $_POST['name'];
                    $phone_no = $_POST['phone_no'];
                    $sql = "INSERT INTO customer (email, password, address, name, phone_no) VALUES ('$email', '$password', '$address', '$name', '$phone_no')";

                    if (mysqli_query($con, $sql)) {
                        header("Location: userlogin.php");
                    } else {
                        echo "Unable to insert";
                    }
                }
            }

            ?>
        </h3>
    </div>
    <form id="fm" method="post">
        <input type="email" name="email" id="email" placeholder=" enter email">
        <input type="password" name="password" id="password" placeholder="enter password">
        <input type="text" name="address" id="address" placeholder="enter address">
        <input type="text" name="name" id="name" placeholder="enter your name">
        <input type="text" name="phone_no" id="phone" placeholder="enter phone number">

        <button type="submit" class="btn btn-primary" name="submit">
            SUBMIT</button>
        <br>
        <button type="reset" class="btn btn-primary" name="reset">
            RESET</button>
    </form>
    </div>
</body>

</html>