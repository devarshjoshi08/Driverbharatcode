<!DOCTYPE html>
<html lang="en">
<?php
include ('conn.php');
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<head>
    <link rel="stylesheet" type="text/css" href="package.css">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>DriverBharat</title>
</head>

<body>
    <div class="banner">
        <!-- <h1>Packages</h1> -->
        <div class="row">
            <div class="column">
                <div class="card">
                    <article>
                        <img src="../img/mini.jpeg">
                        <div class="text">
                            <h3> Mini Pack</h3>
                            <p>This pack is valid for 1 day From 8 am to 8px. You need to complete your profile first, otherwise you will not get driver </p>
                        </div>
                        <a type="button" class="button" href="mini.php">800/-</a>
                    </article>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="../img/normal.jpeg">
                    <div class="text">
                        <h3> Normal Pack</h3>
                        <p>This pack is valid for 1 week From 8 am to 8px. You need to complete your profile first, otherwise you will not get driver.</p>
                    </div>
                    <a type="button" class="button" href="normal.php">3500/-</a>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="../img/max.jpeg">
                    <div class="text maxdiv">
                        <h3> Max Pack</h3>
                        <p>This pack is valid for 1 month From 8 am to 8px. You can change driver at any time. Driver are able to get 2 day leave. You need to complete your profile first, otherwise you will not get driver.</p>
                    </div>
                    <a type="button" class="button" href="max.php">13000/-</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>