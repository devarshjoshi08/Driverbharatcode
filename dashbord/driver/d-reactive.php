<!DOCTYPE html>
<html>
<?php
include ("../css/conn.php");

session_start();
if (!isset($_SESSION['mail'])) {
    header('location: ../adminlogin.php');
}
?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../css/style.css">

        <title>Re-active driver request</title>
    </head>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="header__img">
                <img src="../../img/pnglogo.png">
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
                        <a href="../dashbord.php" class="nav__link">
                            <i class='bx bx-grid-alt nav__icon'></i>
                            <span class="nav__name">Dashboard</span>
                        </a>
                        <a href="../admin.php" class="nav__link ">
                            <i class='bx bx-stopwatch nav__icon'></i>
                            <span class="nav__name">Admin</span>
                        </a>
                        <a href="../user.php" class="nav__link ">
                            <i class='bx bx-list-ul nav__icon'></i>
                            <span class="nav__name">User</span>
                        </a>
                        <a href="../driver.php" class="nav__link active">
                            <i class='bx bx-message-square-detail nav__icon'></i>
                            <span class="nav__name">Driver</span>
                        </a>
                        <a href="../bookings.php" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                            <span class="nav__name">Booking</span>
                        </a>
                        <a href="../feedback.php" class="nav__link">
                            <i class='bx bx-mail-send nav__icon'></i>
                            <span class="nav__name">Feedback</span>
                        </a>
                        <a href="../complaint.php" class="nav__link">
                            <i class='bx bx-mail-send nav__icon'></i>
                            <span class="nav__name">Complaint</span>
                        </a>
                        <a href="../city.php" class="nav__link">
                            <i class='bx bx-calendar-exclamation'></i>
                            <span class="nav__name">city</span>
                        </a>
                        <a href="../payments.php" class="nav__link">
                            <i class='bx bx-mail-send nav__icon'></i>
                            <span class="nav__name">Panding Request</span>
                        </a>
                        <a href="../reports.php" class="nav__link">
                            <i class='bx bx-mail-send nav__icon'></i>
                            <span class="nav__name">Reports</span>
                        </a>
                    </div>
                </div>
                <a href="../logout.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon'></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <!--===== MAIN JS =====-->
        <script src="../css/main.js"></script>

        <h1>Driver re-active request</h1>
        <div class="insertbtn">
            <a href="d-ban.php"><i class='bx bx-plus-medical'></i> Ban accounts</a>
            <a href="nonverify.php"><i class='bx bx-plus-medical'></i> Unverified accounts</a>
            <a href="../driver.php"><i class='bx bx-plus-medical'></i> Back to driver</a>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email address</td>
                    <td>Phone number</td>
                    <td>Date</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = " SELECT * FROM d_reactive";
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run) ){
                        ?>
                <tr>
                    <td>
                        <?= $row['id']; ?>
                    </td>
                    <td>
                        <?= $row['d_fn'].' '.$row['d_ln']; ?>
                    </td>
                    <td>
                        <?= $row['d_mail']; ?>
                    </td>
                    <td>
                        <?= $row['d_phone']; ?>
                    </td>
                    <td>
                        <?= $row['date']; ?>
                    </td>
                    <td>
                        <button class="add">
                        <a href="../deletupdate/re-active.php?id=<?php echo $row['u_mail'];?>">Re-active</a>
                        </button>
                    </td>
                    <td>
                        <button class="remove">
                        <a href="../deletupdate/ban.php?id=<?php echo $row['u_mail'];?>">Ban account</a>
                        </button>
                    </td>
                </tr>
                 <?php
                    }
                ?> 
            </tbody>
        </table>

    </body>

</html>