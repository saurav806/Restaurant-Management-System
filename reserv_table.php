<?php
include "db/db.php";
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/reserv_table.css">
</head>

<body>
    <div id="section_1">
        <div id="left"></div>
        <div id="right">
            <form id="fm" method="post">

                <div id="av_container">
                    <?php
                    $print = "SELECT * FROM tables WHERE free='yes'";
                    $result = mysqli_query($con, $print);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div id="available">
                            <?php echo $row['table_id'];
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div id="mess">
                    <?php
                            if (isset($_REQUEST['reserve'])) {
                                $not = $_POST['table_no'];
                                $name = $_POST['name'];
                                $nop = $_POST['nop'];
                                $ph = $_POST['phone'];
                                $add = $_POST['address'];
                                $date = $_POST['date'];
                                $sql = "INSERT INTO reservation (table_no, name, no_of_people, phone, address, res_date) VALUES ('$not','$name', '$nop', '$ph', '$add', '$date')";
                            
                                if (mysqli_query($con, $sql)) {
                                    $upd = "UPDATE tables SET free='no' WHERE table_id='$not'";
                            
                                    mysqli_query($con, $upd);
                                    echo "<div class new>" . "Booking Sucessfull";
                                }
                            }
                    ?>
                </div>
                <h1>Enter Details</h1>
                <input type="text" name="name" id="name" placeholder="enter your name">
                <input type="number" name="nop" id="no_of_people" placeholder="enter number of people">
                <input type="text" name="phone" id="phone" placeholder="enter phone number">
                <input type="text" name="table_no" id="table_no" placeholder="enter table_no">
                <input type="date" name="date" id="table_no" placeholder="enter date">
                <input type="text" name="address" id="address" placeholder="enter your address">
                <button class="button" name="reserve" id="btn">
                    RESERVE TABLE
                </button>
            </form>
        </div>
    </div>



</body>

</html>