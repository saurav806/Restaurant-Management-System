<?php

include "db/db.php";
include "header.php";
session_start();
if (!$_SESSION['email']) {
  header("location:Adminlogin.php");
} else {

  if (isset($_REQUEST['submit'])) {
    $_SESSION['email'];
    $id = $_POST['id'];
    $item = $_POST['item'];
    $price = $_POST['price'];


    $sql = "INSERT INTO menu(menu_id, dish_name, price, description, quantity) VALUES ('$id', '$item', '$price', '','')";

    if (mysqli_query($con, $sql)) {

      echo "<div class = bg>Inserted </div>";
      header("Location: Adminpanel.php");
    } else {
      echo "Unable to insert";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/adminpanel.css">
  <title>Login</title>
</head>

<body>
  <img class="bg" src="image/bg5restaurant6.jpg" alt="none">
  <div class="container">
    <h1>ADMIN PANEL</h1>
    <form id="fm" method="post">
      <div id="id">
        <label for="email">ADD ITEM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="text" name="item" id="text" placeholder="add item">
      </div>
      <br>
      <div id="id"> <label for="text">ADD ITEM PRICE</label>
        <input type="text" name="price" id="text" placeholder="add item price">
      </div>
      <br>
      <div id="id"> <label for="text">ADD ITEM ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="text" name="id" id="text" placeholder="add item id">
      </div>
      <button class="button" name="submit" id="btn">
        SUBMIT
      </button>
      <br>
      <button class="button" name="logout" id="btn">

        <a href="logout.php">
          LOGOUT
        </a>
      </button>
    </form>
  </div>
</body>

</html>