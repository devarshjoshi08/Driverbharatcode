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
                    <a href="dashbord" class="nav__logo">
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

        <h1>State list</h1>

        <div class="maindiv">

            <table id="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>State Name</td>
                        <td>Total cities</td>
                        <td>Active cities</td>
                        <td>Inactive cities</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $query = " SELECT * FROM state_list";
                $query_run = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($query_run) ){
                ?>
                        <tr>
                            <td>
                                <?= $row['id']; ?>
                            </td>
                            <td>
                                <?= $row['state']; ?>
                            </td>
                            <td>
                                <?php
                                $num = $row['id'];
                                $city = "SELECT * FROM all_cities WHERE state_code = $num";
                                $run = mysqli_query($conn , $city);
                                $count = mysqli_num_rows($run);
                                echo $count;
                                ?>
                            </td>
                            <td>
                                <?php
                                $num = $row['id'];
                                $city = "SELECT * FROM all_cities WHERE (state_code = $num) & (role = 1)";
                                $run = mysqli_query($conn , $city);
                                $count = mysqli_num_rows($run);
                                echo $count;
                                ?>
                            </td>
                            <td>
                                <?php
                                $num = $row['id'];
                                $city = "SELECT * FROM all_cities WHERE (state_code = $num) & (role = 0)";
                                $run = mysqli_query($conn , $city);
                                $counts = mysqli_num_rows($run);
                                echo $counts;
                                ?>
                            </td>
                            <td>
                                <button class="add">
                                <a href="city.php?id=<?php echo $row['id']; ?>">Modify</a>
                                </button>
                            </td>
                            <td>
                            <?php
                    if ( $counts > 0) { ?>
                        <button class="update">
                        <a href="deletupdate/activecity.php?id=<?php echo $row['id']; ?>">Active all</a>
                        </button>
                    
                
                    <?php } else { ?>
                        <button class="remove">
                        <a href="deletupdate/inactivecity.php?id=<?php echo $row['id']; ?>">Inactive all</a>
                        </button>
                    <?php } ?>
                            </td>
                        </tr>
                        <?php
                }
                ?>

                </tbody>
            </table>

        </div>
        <!--===== MAIN JS =====-->
        <script src="css/main.js"></script>

    </body>

</html>