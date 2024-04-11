<!DOCTYPE html>
<html>

    <?php
    session_start();
    
    if (!isset($_SESSION['email'])) {
        header('location: ../index.php');
        alert("login first to access");
    }
    
    include ('php/conn.php');
    include ('php/profiledata.php');
    ?>
    
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>
<body>
    <div class="banner">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../img/pnglogo.png" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link bdlink" aria-current="page" href="../home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../about us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../contact us.php">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container w-50 h-50">
            <!-- --- left --- -->
            <div class="col-5 col-first">
                <div class="row">
                    <div class="col">
                        <div class="imgdiv"> 
                            <?php
                                if ($photo == '') {
                            ?>
                            <img id="profileimg" src="php/pictures/default.jpg">
                            <?php
                                } else {
                            ?>
                            <img id="profileimg" src="php/<?php echo $photo; ?>">
                            <?php
                                }
                            ?>    
                        </div>
                    </div>
                    <div class="col labeldiv">
                        <form method="POST" action="php/upload.php" enctype="multipart/form-data" id="form">
                            <div class="round">
                                <input type="file" id="image" name="image" accept=".jpg, .png, .jpeg">
                                <label for="image"><i class='bx bxs-camera'></i> Change Photo</label>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <h1 class="col-name">
                            <?php echo "$fname $lname"; ?>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- --- right --- -->
            <div class="col-7">
                <div class="container h-100">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="visitprofile.php">Visit profile </a></button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="visitprofile.php">Edit profile </a></button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="changepass.php">Change password</a></button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="booking.php">Bookings</a></button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="complaints.php">Complaints </a></button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="../php/logout.php">Log out</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        document.getElementById("image").onchange = function() {
            document.getElementById('form').submit();
        }
    </script>
</body>

</html>