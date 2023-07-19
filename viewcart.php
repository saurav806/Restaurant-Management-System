<?php

include "db/db.php";
include "header.php";

if (isset($_REQUEST['view'])) {
  $sql = "SELECT * FROM menu WHERE quantity!=0";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>";
    echo " <div class=container,bg> " . $row['menu_id'] . "  " . $row['dish_name'] . "  " . $row['quantity'] . "</div>";
    echo "<br>";
  }
}
if (isset($_REQUEST['bill'])) {
  $sql = "SELECT * FROM menu WHERE quantity!=0";
  $result = mysqli_query($con, $sql);
  $sum = mysqli_num_rows($result);
  $total = 0;
  while ($row = mysqli_fetch_assoc($result)) {
    $cost = $row['quantity'] * $row['price'];
    $total += $cost;
    echo "<br>";
    echo " <div class=container,bg> " . $row['menu_id'] . "  " . $row['dish_name'] . "  " . $row['quantity'] . "  " . "$cost" . "</div>";
    echo "<br>";
  }
  echo "<div class = container>total bill =" . "$total" . "</div>";
}

if(isset($_REQUEST['po'])){
  header("Location: main.php");
  echo "Order Successfull";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/viewcart.css">
  <title>View Cart</title>
</head>
<body>
  <img class="bg" src="image/bg5restaurant6.jpg" alt="none">
  <div class="container">
    <form id="fm" method="POST">
      <button class="button" name="view" id="btn">
        View Cart
      </button> <br>
      <button class="button" name="bill" id="btn">
        Show bill
      </button> <br>

      <button class="button" name="po" id="btn">
  place order
</button>
    </form>
  </div>
</body>
</html>
