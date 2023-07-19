<?php
include "db/db.php";
include "header.php";
session_start();
if (!$_SESSION['email']) {
  header("location:userlogin.php");
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/main.css">
  <title>Login</title>
</head>

<body>
  <img class="bg" src="image/bg5restaurant6.jpg" alt="none">
  <div class="container">

    <br>
    <button class="button" id="btn">

      <a href="menu.php">
        MENU
      </a>
    </button>
    <br>
    <br><br><br>
    <button class="button" id="btn">

      <a href="viewcart.php">
        VIEW CART
      </a>
    </button>
    <br>
    <br><br><br>
    <button class="button" id="btn">

      <a href="reserv_table.php">
        RESERVAION
      </a>
    </button>
    <br><br><br>
   
    <br>
    <button class="button" id="btn">

      <a href="logout.php">
        LOGOUT
      </a>
    </button>
    </form>
  </div>
</body>

</html>