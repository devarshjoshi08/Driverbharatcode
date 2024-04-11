<!DOCTYPE html>
<html>
<?php
include ("css/conn.php");

// session_start();
// if (!isset($_SESSION['mail'])) {
//     header('location: adminlogin.php');
// }
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/style.css">

    <title>feedbacks</title>
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
                    <a href="dashbord.php" class="nav__link">
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
                    <a href="feedback.php" class="nav__link active">
                        <i class='bx bx-mail-send nav__icon'></i>
                        <span class="nav__name">Feedback</span>
                    </a>
                    <a href="complaint.php" class="nav__link">
                        <i class='bx bx-mail-send nav__icon'></i>
                        <span class="nav__name">Complaint</span>
                    </a>
                    <a href="state.php" class="nav__link">
                        <i class='bx bx-map-alt'></i>
                        <span class="nav__name">state</span>
                    </a>
                    <a href="payments.php" class="nav__link">
                        <i class='bx bx-mail-send nav__icon'></i>
                        <span class="nav__name">Panding Request</span>
                    </a>
                    <a href="reports.php" class="nav__link">
                        <i class='bx bx-mail-send nav__icon'></i>
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

    <!--===== MAIN JS =====-->
    <script src="css/main.js"></script>

    <h1>feedback data</h1>
    <table id="table">
            <thead>
                <tr>
                    <td>Feedback ID</td>
                    <td>User id</td>
                    <td>User name</td>
                    <td>Order id</td>
                    <td>Driver id</td>
                    <td>Driver name</td>
                    <td>Shedule date</td>
                    <td>Date</td>
                    <td>rating</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = " SELECT * FROM feedback_db";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach($query_run as $row) {
                        ?>
                            <tr>
                                <td><?= $row['f_id']; ?></td>
                                <td><?= $row['u_id']; ?></td>
                                <td><?= $row['u_name']; ?></td>
                                <td><?= $row['o_id']; ?></td>
                                <td><?= $row['d_id']; ?></td>
                                <td><?= $row['d_name']; ?></td>
                                <td><?= $row['sheduled_date']; ?></td>
                                <td><?= $row['f_date']; ?></td>
                                <td><?= $row['f_rating']; ?></td>
                            </tr>
                        <?php
                    }
                } 
                else {
                    ?>
                        <tr>
                            <td collspan="5"></td>
                        </tr>
                    <?php  
                }
                    ?>
                </tbody>
            </table>
    
</body>

</html>