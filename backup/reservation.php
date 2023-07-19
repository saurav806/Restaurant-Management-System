<?php
  // $server = "localhost";
  // $user = "root";
  // $password = "";
  // $db = "db";
  // $con = mysqli_connect($server, $user, $password, $db);
  include "db/db.php";

  // $print="SELECT * FROM tables WHERE free='yes'";
  // $result= mysqli_query($con,$print);
  //  echo "<center><div class new>"."Free Table "."</center></div>";
  //     while($row= mysqli_fetch_assoc($result)){
  //       echo "<center>"."<div class new>".$row['table_id'] ."  </center></div>";
  //     }


  if(isset($_REQUEST['reserve'])){
    $not=$_POST['table_no'];
    $name=$_POST['name'];
    $nop=$_POST['nop'];
    $ph=$_POST['phone'];
    $add=$_POST['address'];
    $date=$_POST['date'];
    
    $sql="INSERT INTO reservation (table_no, name, no_of_people, phone, address, res_date) VALUES ('$not','$name', '$nop', '$ph', '$add', '$date')";
   
    if(mysqli_query($con,$sql)){
      $upd= "UPDATE tables SET free='no' WHERE table_id='$not'";
       
      mysqli_query($con,$upd);
     echo  "<div class new>"."</br>
      </br>
      </br>";
      echo "<div class new>"."Booking Sucessfull";
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
               .new{
                display:flex;
                padding-top: 70px;
                align-items: center;
                justify-content: center;
                flex-direction: column;
               }
               .container 
               {
                max-width: 80%;
                /* background-color: aqua; */
                padding:150px;
                margin: auto;
               }
               *{
                margin:0px;
                padding:0px;
                box-sizing:border-box; 
                font-family: 'Roboto',sans-serif;
                }
               .container h1,p{
                text-align: center;
                font-family:'Times New Roman', Times, serif;
               }
               input{
                width:60%;
                margin:12px auto ;
             padding:10px; 
                font-size: 15p x;
                border :2px solid black;
                border-radius: 6px;
                outline:none;
             
               }
               #fm
               {
                display:flex;
                padding-top: 70px;
                align-items: center;
                justify-content: center;
                flex-direction: column;
               }
               h1{
                font-size: 45px;
               }
               .button{
                color:rgb(227, 220, 220);
                background: rgb(45, 7, 45);
                padding:8px 12px;
                font-size: 20px;
                border: 2px solid white;
                border-radius: 14px;
                cursor: pointer;
                width:20%;
                
               }
               .bg{
                width:100%;
                position:absolute;
                z-index: -1;
                opacity:0.5;
                height:630px;
               }
               p{
                color:rgb(22, 20, 20);
                font-size: 25px;
               }
               #id{
                width:50%;
               }
               a{
                text-decoration: none;
               }
               .bt{
                float: left;
                height:630px;
                width:40%;
               }
       
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Table</title>
</head>
<body>
    <img  class= "bg" src="image/bg5restaurant6.jpg" alt="none">
    <img class="bt" src="image/Table3.png" alt="none">
    
        <form id = "fm" method="post">
            <center>
                <h1>Enter Details</h1>
            </center>
        <input type="text" name="name" id = "name" placeholder="enter your name">
        <input type="number" name="nop" id = "no_of_people" placeholder="enter number of people">
        <input type="text" name="phone" id = "phone" placeholder="enter phone number">
        <input type="text" name="table_no" id = "table_no" placeholder="enter table_no">
        <input type="date" name="date" id = "table_no" placeholder="enter date">
        <input type="text" name="address" id = "address" placeholder="enter your address">
        
    
    <br>
    <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
    <center>
    <button class="button" name="reserve" id="btn">
          RESERVE TABLE
      </button>
    </center>  
      <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
      <br>
      <center>
      <button class="button" id="btn">
        <a href = "main.php" >
          BACK
        </a>
      </button>
    </center> 
    </form>
    </body>
</html>