<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
include ('conn.php')
?>
<head>
    <link rel="stylesheet" type="text/css" href="productpage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>DriverBharat</title>
</head>

<body>
    <div class="banner">
        <div class="product">
            <div class="left">
                <h2>Details</h2>
                <ul>
                    <li>1-Month service</li>
                    <li>Not refundable</li>
                    <li>1-day leave if driver want</li>
                    <li>Time:- 8:00am to 1:00pm - 2:00pm to 8:00pm</li>
                    <li>1 hour break according to your and driver sutable time</li>
                    <li>not extandable</li>
                    <li>Our security and sefty</li>
                    <li>100% safe for women's</li>
                </ul>
            </div>
            <div class="right">
                <h1>Max</h1>
                <h3>13000/-</h3>
                <?php
                
                $mail = $_SESSION['email'];
                $user = "SELECT * FROM user_db WHERE u_mail = '$mail'";
                $run = mysqli_query($conn , $user);
                $fetch = mysqli_fetch_array($run);
                $city = $fetch['u_city'];

                $citydb = "SELECT * FROM all_cities WHERE city_code = $city";
                $cityrun = mysqli_query($conn , $citydb);
                $rolefetch = mysqli_fetch_array($cityrun);
                $role = $rolefetch['role'];

                if ($role == 1) {
                ?>
                <a type="button" href="payments/payment.php?name=Max&amaount=13000/-">Book Now</a>
                <?php
                } else {
                ?>
                <a type="button" href="payments/susspended.php">Book Now</a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>