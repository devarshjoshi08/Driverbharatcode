<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location: ../../index.php');
    alert("login first to access");
}
?>
<?php
include('../conn.php');

// $pack = $_GET['packname'];
// $amount = $_GET['amount'];
// $date = $_GET['sheduledate'];

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="success.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Successful</title>
</head>
<body>
    <div class="banner">
        <div class="success">
        <i class='bx bx-calendar-check'></i>
        <p>Booking successfull</p>
        </div>
    </div>
</body>
</html>