<?php
session_start();
include "db/db.php";
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/adminlogin.css">
  <title>Login</title>
</head>

<body>
  <img class="bg" src="image/bg5restaurant6.jpg" alt="none">
  <div class="container2">
    <div id="msg">
      <?php
      if (isset($_REQUEST['login'])) {
        if (($_REQUEST['email'] == "admin@login") || $_REQUEST['password'] == "abc123") {
          $_SESSION['email'] = "admin@login";
          echo "login successful";
          header("Location: Adminpanel.php");
        } else {
          echo "incorrect detail";
        }
      }
      ?>
    </div>
    <h1>ADMIN LOGIN</h1>
    <form id="fm" method="post">
      <div id="id">
        <label for="email">EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="email" name="email" id="email" placeholder=" enter email">
      </div>
      <br>
      <div id="id"> <label for="password">PASSWORD</label>
        <input type="password" name="password" id="password" placeholder="enter password">
      </div>

      <button class="button" name="login" id="btn">
        LOGIN
      </button>

      <br>
      <!-- <button class="button" id="btn">

        <a href="homepage.php">
          BACK
        </a>
      </button> -->
    </form>
  </div>
</body>

</html>