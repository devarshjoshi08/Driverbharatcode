<!DOCTYPE html>
<html>

<?php
include('php/conn.php');
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$mail = $_SESSION['email'];

$query = "SELECT * FROM user_db WHERE u_mail = '$mail'";
$run = mysqli_query($conn , $query);
$fatch = mysqli_fetch_array($run);
$city = $fatch['u_city'];

$cityquery = "SELECT * FROM all_cities WHERE city_code = $city";
$cityrun = mysqli_query($conn , $cityquery);
$cityfatch = mysqli_fetch_array($cityrun);
$role = $cityfatch['role'];

$driver = "SELECT * FROM drivers_db WHERE (d_city = '$city') & (d_role = 1)";
$driverrun = mysqli_query($conn , $driver);
$driverfatch = mysqli_num_rows($driverrun);

$ridesquery = "SELECT * FROM booking_db WHERE city = '$city'";
$ridesrun = mysqli_query($conn , $ridesquery);
$rides = mysqli_num_rows($ridesrun);
?>

    <head>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <title>DriverBharat</title>
    </head>

    <body>
        <div class="banner mdbanner">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/pnglogo.png" alt="" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link bdlink active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bdlink" href="about us.php">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bdlink" href="contact us.php">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile/profile.php"><i class="far fa-user-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <h1> Book Your Driver Now</h1>
                <p> Join India's first online driver providing service and connect with DriverBharat.<br>The easiest way to find Driver for your car.</p>
                <div class="button">
                    <a href="packages/package.php"><button type="button"><span id="span"></span>View Packages</button></a>
                </div>
            </div>
        </div>

        <div class="header">
            <h1>What We Provide.</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="first">
                        <div class="info-left"><i class="fas fa-circle-notch"></i></div>
                        <div class="info-right">
                            <h3>24*7 customer support</h3>
                            <p>A dedicated 24x7 customer support team always at your service to help and solve any problem at any time</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="first">
                        <div class="info-left"><i class="fas fa-circle-notch"></i></div>
                        <div class="info-right">
                            <h3>Experienced Drivers</h3>
                            <p>A experienced driver is must requirement of every customer for their car's safty</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="first">
                        <div class="info-left"><i class="far fa-star"></i></div>
                        <div class="info-right">
                            <h3>Verified Drivers</h3>
                            <p>All our driver-partners are background verified and trained to deliver only the best experience and Safty of womens</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="first">
                        <div class="info-left"><i class="fas fa-shield-alt"></i></div>
                        <div class="info-right">
                            <h3>Insurance claim</h3>
                            <p>In case of any demage to car we try best to pass your insurance claim. If it not claimable then we give all money required to make your car as it was before.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="first">
                        <div class="info-left"><i class="fas fa-money-bill"></i></div>
                        <div class="info-right">
                            <h3>cash less</h3>
                            <p>Pay now enjoy till end so no stress or tention you need to face in case of cancelaction if include in package then you will get refund with in 24 hours</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="first">
                        <div class="info-left"><i class="fas fa-shield-alt"></i></div>
                        <div class="info-right">
                            <h3>Third party insurance</h3>
                            <p>We will offer third party insurance if you want more and quick claim and repair. COMMING SOON
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card desc">
            <div class="card-header">
                <h1>What is DriverBharat ?</h1>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p><b>DriverBharat</b> is an online and easiest way to find driver for your car. It is fastest method to gert driver. Before now you need to find driver by calling to relative and friends and without knowing background. Now <b>DriverBharat</b>                        is with you. We provide saifty of your car and your family. For any reason you not like driver you can change it any time during package. Enjoy your rides with <b>DriverBharat</b></p>
                </blockquote>
            </div>
        </div>

        <div class="count">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">service is working?</h5>
                        <p class="card-text">
                            <?php
                                if ($role == 1) {
                            ?>
                                Yes
                            <?php
                                } else {
                            ?>
                                No
                            <?php
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total drivers in your city</h5>
                        <p class="card-text">
                            <?php
                                echo $driverfatch ; 
                            ?>   
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total rides in your city</h5>
                        <p class="card-text">
                            <?php 
                                echo $rides ; 
                            ?> 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-distributed">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-left">
                            <img src="img/pnglogo.png">
                            <p class="footer-links">
                                <a href="about us.php" class="link-1">About us</a>
                                <a href="contact us.php">Contact us</a>
                                <a href="profile/profile.php">Profile</a>
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-center">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
                            </div>
                            <div>
                                <i class="fa fa-phone"></i>
                                <p>+1.555.555.5555</p>
                            </div>
                            <div>
                                <i class="fa fa-envelope"></i>
                                <p><a href="#">support@company.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-right">
                            <p class="footerabout">
                                <span>About the company</span> DriverBharat is a online service to Hire a Driver for car you own. We purly provide job and security to you and your family also for your cars buy insurance and experience Drivers.
                            </p>
                            <div class="footer-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>