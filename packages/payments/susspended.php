<!DOCTYPE html>
<html lang="en">

<?php


include ('../conn.php');
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../../index.php');
}


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="susspend.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Failes</title>
</head>
<body>
    <div class="banner">
        <div class="success">
        <i class='bx bx-calendar-exclamation'></i> 
        <p>SORRY our service has been stop for your city due to one of following reason</p>
    
       <ol>
           <li>Goverment verifaction</li>
           <li>Driver verifaction for your security</li>
           <li>Drivers not available</li>
       </ol>
    </div>
    </div>
</body>
</html>