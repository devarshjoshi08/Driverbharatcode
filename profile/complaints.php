<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Bookings</title>

    <?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location: ../index.php');
    alert("login first to access");
}

include ('php/conn.php');
$mail = $_SESSION['email'];
$fatch = "select * from user_db where u_mail = '$mail' ";
$query = mysqli_query($conn , $fatch);
$run = mysqli_fetch_assoc($query);

$id = $run['u_id'];
$fname = $run['u_fn'];
$lname = $run['u_ln'];
$mail = $run['u_mail'];
$phone = $run['u_contact'];
$dbpass = $run['u_pass'];
$gender = $run['u_gender'];
$address = $run['u_add'];
$state = $run['u_state'];
$city = $run['u_city'];
$photo = $run['pic'];
?>
</head>
<body>

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
                            <a class="nav-link bdlink active" aria-current="page" href="../home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../about us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../contact us.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile/profile.php"><i class="far fa-user-circle"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container w-50 h-75">
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
                    <!-- <div class="col labeldiv">
                        <form method="POST" action="php/upload.php" enctype="multipart/form-data" id="form">
                            <div class="round">
                                <input type="file" id="image" name="image" accept=".jpg, .png, .jpeg">
                                <label for="image"><i class='bx bxs-camera'></i> Change Photo</label>
                            </div>
                        </form>
                    </div> -->
                    <div class="col">
                        <h1 class="col-name">
                            <?php echo "$fname $lname"; ?>
                        </h1>
                    </div>
                    <div class="col btns">
                        <a href="profile.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                    </div>
                </div>
            </div>
            <!-- --- right --- -->
            <div class="col-7 bookings">
                <?php
                    $query = " SELECT * FROM complaint_db WHERE u_id = $id";
                    $query_run = mysqli_query($conn, $query);
                    
                    while ($row = mysqli_fetch_array($query_run) ){
                    $status  = $row['status']
                ?>
                <div class="card">
                    <div class="card-header">
                        Complaint id: <?php echo $row['cmp_id']; ?>
                    </div>
                    <div class="card-body">
                    <p class="card-text">                     
                        <div class="row">
                            <div class="col">
                                Booking id: <?php echo $row['o_id']; ?>
                            </div>
                            <div class="col">
                                complaint date <?php echo $row['cmp_date']; ?>
                            </div>
                        </div>
                    </p>
                    <?php
                        if($status == 1) {
                    ?>
                    <a href="php/complaintdetails.php?id=<?php echo $row['cmp_id'];?>" class="btn btn-success">View reply</a>
                        <!-- <a href="php/bookingdetails.php?id=<?php echo $row['b_id'];?>" class="btn btn-success">View Reply</a> -->
                    <?php
                        } else if ($status == 0) {
                    ?>
                        <a href="#" class="btn btn-warning">No replay</a>
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
    </div>
</body>
    
</body>
</html>