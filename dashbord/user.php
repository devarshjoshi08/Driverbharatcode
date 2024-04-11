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

    <title>Users</title>
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
                    <a href="user.php" class="nav__link active">
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
                        <span class="nav__name">Reports</span>
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

    <h1>User data</h1>
    <div class="insertbtn">
        <a href="user/reactive.php"> <i class='bx bx-plus-medical'></i> Re-active request</a>
        <a href="user/u-ban.php"> <i class='bx bx-plus-medical'></i>Ban users</a>
    </div>
    <table id="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email address</td>
                    <td>Phone number</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Address</td>
                    <td>Join date</td>
                    <td>Bookings</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = " SELECT * FROM user_db";
                $query_run = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($query_run) ){
                        ?>
                            <tr>
                                <td><?= $row['u_id']; ?></td>
                                <td><?= $row['u_fn'].' '.$row['u_ln']; ?></td>
                                
                                <td><?= $row['u_mail']; ?></td>
                                <td><?= $row['u_contact']; ?></td>
                                <td>
                                    <?php 
                                        $city=  $row['u_city'];
                                        $cityquery = "SELECT * FROM all_cities WHERE city_code = $city";
                                        $run = mysqli_query($conn , $cityquery);
                                        $fatch = mysqli_fetch_array($run);
                                        $city_name = $fatch['city_name'];
                                        echo $city_name;
    
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $state=  $row['u_state'];
                                    $statequery = "SELECT * FROM state_list WHERE id = $state";
                                    $staterun = mysqli_query($conn , $statequery);
                                    $statefatch = mysqli_fetch_array($staterun);
                                    $state_name = $statefatch['state'];
                                    echo $state_name;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $adddress = $row['u_add'];
                                    if ($adddress != '') {
                                        ?>
                                        YES
                                        <?php
                                    } else {
                                        ?>
                                        NO
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $row['join_date']; ?>
                                </td>
                                <td>
                                    <?php
                                    $uid = $row['u_id'];
                                    $booking = "SELECT * FROM booking_db WHERE u_id = $uid";
                                    $bookingrun = mysqli_query($conn , $booking);
                                    $totalbooking = mysqli_num_rows($bookingrun);
                                    echo $totalbooking; 
                                    ?>
                                </td>
                                <td>
                                <?php
                    if ($row['u_role'] == 1) { ?>
                        <button class="add">
                        <a href="deletupdate/userdelet.php?id=<?php echo $row['u_id'];?>">Active</a>
                        </button>
                    
                
                    <?php } else { ?>
                        <button class="remove">
                        <a href="deletupdate/userdelet.php?id=<?php echo $row['u_id'];?>">Inactive</a>
                        </button>
                    <?php } ?>
                    </td>
                            </tr>
                        <?php
                    }
                
                    ?>
                </tbody>
            </table>
    
</body>

</html>