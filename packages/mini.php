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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="productpage.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>DriverBharat</title>
</head>

<body>
    <div class="banner">
        <div class="product">
            <div class="left">
                <h2>Details</h2>
                <ul>
                    <li>1-Day service</li>
                    <li>Not refundable</li>
                    <li>Time:- 8:00am to 1:00pm - 2:00pm to 8:00pm</li>
                    <li>1 hour break according to your and driver sutable time</li>
                    <li>not extandable</li>
                    <li>Our security and sefty</li>
                    <li>100% safe for women's</li>
                </ul>
            </div>

            <div class="right">
                <h1>Mini</h1>
                <h3>800/-</h3>
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
                <a type="button" href="payments/payment.php?name=Mini&amaount=800/-">Book Now</a>
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
