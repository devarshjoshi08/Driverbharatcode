<!DOCTYPE html>
<html>
<?php
include ("css/conn.php");

session_start();
if (!isset($_SESSION['mail'])) {
    header('location: adminlogin.php');
}
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/style.css">

    <title>Panding Request</title>
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
                    <a href="payments.php" class="nav__link active">
                        <i class='bx bx-mail-send nav__icon'></i>
                        <span class="nav__name">Panding request</span>
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

    <h1>Panding bookings</h1>
    <table id="table">
            <thead>
                <tr>
                    <td>Payment ID</td>
                    <td>Payment date</td>
                    <td>Order id</td>
                    <td>User id</td>
                    <td>Transection id</td>
                    <td>Shedule date</td>
                    <td>Amount</td>
                    <td>Type</td>
                    <td>City</td>
                    <td>state</td>
                    <td>Address</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = " SELECT * FROM payment_db";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach($query_run as $row) {
                        ?>
                            <tr>
                                <td><?= $row['p_id']; ?></td>
                                <td><?= $row['p_date']; ?></td>
                                <td><?= $row['o_id']; ?></td>
                                <td><?= $row['u_id']; ?></td>
                                <td><?= $row['t_id']; ?></td>
                                <td><?= $row['shedule_date']; ?></td>
                                <td><?= $row['p_amount']; ?></td>
                                <td><?= $row['p_name']; ?></td>
                                <td>
                                   

                                    <?php 
                                    $city=  $row['city'];
                                    $cityquery = "SELECT * FROM all_cities WHERE city_code = $city";
                                    $run = mysqli_query($conn , $cityquery);
                                    $fatch = mysqli_fetch_array($run);
                                    $city_name = $fatch['city_name'];
                                    echo $city_name;

                                    ?>
                                </td>
                                <td>
                                    
                                    <?php
                                    $state=  $row['state'];
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
                                <button class="update">
                                    <a href="deletupdate/assign.php?id=<?php echo $row['p_id'];?>">Assign</a>
                                </button>
                                </td>
                                <td>
                                <button class="update">
                                    <a href="deletupdate/cancel.php?id=<?php echo $row['o_id'];?>">Reject</a>
                                </button>
                                </td>
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