<!DOCTYPE html>
<html>
<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

    <head>
        <!-- <link rel="stylesheet" type="text/css" href="css/nav.css"> -->
        <link rel="stylesheet" type="text/css" href="css/about.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <title>DriverBharat</title>
    </head>

    <body>
        <div class="banner">
        <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/pnglogo.png" alt="" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link bdlink" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bdlink active" href="#.php">About us</a>
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
            <div class="company">
                <div class="right">
                    <h1>What is DriverBharat ?</h1>
                </div>
                <div class="bottom">
                    <p><b>DriverBharat</b>is an online and easiest way to find driver for your car. It is fastest method to gert driver. Before now you need to find driver by calling to relative and friends and without knowing background. Now <b>DriverBharat</b>                        is with you. We provide saifty of your car and your family. For any reason you not like driver you can change it any time during package. Enjoy your rides with <b>DriverBharat</b></p>
                </div>
            </div>
        </div>
        </div>
        <div class="containertitle">
            <h1>Our Team</h1>
        </div>
        <div class="container">
            <div class="teams">
                <img src="img/devarsh.jpeg" height="100px" alt="">
                <div class="name">
                    <h3>Devarsh joshi</h3>
                </div>
                <div class="desig">
                    <h5>Back/Front end Devloper</h5>
                </div>
                <!-- <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quisquam, eius architecto laborum cupiditate maxime atque esse, quasi quia tenetur ut at debitis ipsam magnam.</div> -->

                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=100010391475886"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com/__devarsh_?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/Devarshjoshi_?s=09"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="teams">
                <img src="img/mihir.jpeg" height="100px" alt="">
                <div class="name">
                    <h3>mihir gopani</h3>
                </div>
                <div class="desig">
                    <h5>Back/Front end Devloper</h5>
                </div>
                <!-- <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quisquam, eius architecto laborum cupiditate maxime atque esse, quasi quia tenetur ut at debitis ipsam magnam.</div> -->

                <div class="social-links">
                    <a href="https://www.facebook.com/mihirgopani"><i class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com/mihir.gopani?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>


    </body>

</html>