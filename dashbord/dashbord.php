<!DOCTYPE html>
<html>
<?php
include ("css/conn.php");

// session_start();
// if (!isset($_SESSION['mail'])) {
//     header('location: adminlogin.php');
// }

$user = "select * from user_db";
$query = mysqli_query($conn , $user);
$usercount = mysqli_num_rows($query);

$driver = "select * from drivers_db";
$query = mysqli_query($conn , $driver);
$drivercount = mysqli_num_rows($query);

$booking = "select * from booking_db";
$query = mysqli_query($conn , $booking);
$bookingcount = mysqli_num_rows($query);

$complaint = "select * from complaint_db";
$query = mysqli_query($conn , $complaint);
$complaintcount = mysqli_num_rows($query);

$panding = "SELECT * FROM booking_db WHERE status = 2 ";
$query = mysqli_query($conn , $panding);
$pandingcount = mysqli_num_rows($query);

$cancel = "SELECT * FROM booking_db WHERE status = 0 ";
$query = mysqli_query($conn , $cancel);
$cancelcount = mysqli_num_rows($query);

$minisuccess = "SELECT * FROM mini WHERE status = 1 ";
$query = mysqli_query($conn , $minisuccess);
$minisuccesscount = mysqli_num_rows($query);

$normalsuccess = "SELECT * FROM normal WHERE status = 1 ";
$query = mysqli_query($conn , $normalsuccess);
$normalsuccesscount = mysqli_num_rows($query);

$maxsuccess = "SELECT * FROM max WHERE status = 1 ";
$query = mysqli_query($conn , $maxsuccess);
$maxsuccesscount = mysqli_num_rows($query);

$minifail = "SELECT * FROM mini WHERE status = 0 ";
$query = mysqli_query($conn , $minifail);
$minifailcount = mysqli_num_rows($query);

$normalfail = "SELECT * FROM normal WHERE status = 0 ";
$query = mysqli_query($conn , $normalfail);
$normalfailcount = mysqli_num_rows($query);

$maxfail = "SELECT * FROM max WHERE status = 0 ";
$query = mysqli_query($conn , $maxfail);
$maxfailcount = mysqli_num_rows($query);

// $total = "select * from booking_db";
// $query = mysqli_query($conn , $total);
// $totalcount = mysqli_num_rows($query);

// $panding = "select * from payment_db";
// $query = mysqli_query($conn , $panding);
// $pandingcount = mysqli_num_rows($query);



?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/style.css">

    <title>Dashbord</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="header__img">
            <img src="../img/pnglogo.png">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">DriverBharat</span>
                </a>
                <div class="nav__list">
                    <a href="dashbord.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <a href="admin.php" class="nav__link ">
                        <i class='bx bx-stopwatch nav__icon'></i>
                        <span class="nav__name">Admin</span>
                    </a>
                    <a href="user.php" class="nav__link">
                        <i class='bx bx-list-ul nav__icon'></i>
                        <span class="nav__name">User</span>
                    </a>
                    <a href="driver.php" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Driver</span>
                    </a>
                    <a href="bookings.php" class="nav__link">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                        <span class="nav__name">Booking</span>
                    </a>
                    <a href="feedback.php" class="nav__link">
                        <i class='bx bx-mail-send nav__icon'></i>
                        <span class="nav__name">Feedback</span>
                    </a>
                    <a href="complaint.php" class="nav__link">
                    <i class='bx bx-calendar-exclamation'></i>
                        <span class="nav__name">Complaint</span>
                    </a>
                    <a href="state.php" class="nav__link">
                        <i class='bx bx-map-alt'></i>
                        <span class="nav__name">state</span>
                    </a>
                    <a href="payments.php" class="nav__link">
                    <i class='bx bxs-time-five'></i>
                        <span class="nav__name">Panding request</span>
                    </a>
                    <a href="reports.php" class="nav__link">
                    <i class='bx bx-file'></i>
                        <span class="nav__name">Report</span>
                    </a>
                </div>
            </div>
            <a href="logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <h1>Dashboard</h1>

    <div class="maindiv">
        <div class="row">
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Total User</p>
                    <p><?php echo $usercount ?></P>
                </div>
            </div>
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Total Drivers</p>
                    <p><?php echo $drivercount ?></P>
                </div>
            </div>
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Total Booking</p>
                    <p><?php echo $bookingcount ?></P>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Complaints</p>
                    <p><?php echo $complaintcount ?></P>
                </div>
            </div>

            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Panding booking</p>
                    <p><?php echo $pandingcount ?></P>
                </div>
            </div>
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Cancel booking</p>
                    <p><?php echo $cancelcount ?></P>
                </div>
            </div>

        </div>

        

        <div class="row">
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Success Mini order</p>
                    <p><?php echo $minisuccesscount ?></P>
                </div>
            </div>

            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Success Norm. order</p>
                    <p><?php echo $normalsuccesscount ?></P>
                </div>
            </div>

            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Success Max order</p>
                    <p><?php echo $maxsuccesscount ?></P>
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Cancel Mini order</p>
                    <p><?php echo $minifailcount ?></P>
                </div>
            </div>
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Cancel Norm. order</p>
                    <p><?php echo $normalfailcount ?></P>
                </div>
            </div>
            <div class="carddiv">
                <div class="icondiv">
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="contentdiv">
                    <p>Cancel Max order</p>
                    <p><?php echo $maxfailcount ?></P>
                </div>
            </div>

            
        </div>
    </div>
    <!--===== MAIN JS =====-->
    <script src="css/main.js"></script>

</body>

</html>