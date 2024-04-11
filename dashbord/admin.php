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

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/style.css">

        <title>Admin details</title>
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
                        <a href="admin.php" class="nav__link active">
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

        <h1>Admin Data</h1>

        <div class="insertbtn">
            <a href="deletupdate/insertquery.php"> <i class='bx bx-plus-medical'></i> Insert New admin</a>
        </div>

        

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = " SELECT * FROM admin_db";
                $query_run = mysqli_query($conn, $query);
                
                while ($row = mysqli_fetch_array($query_run) ){
                    ?>
                    <tr>
                        <th scope="row">
                            <?= $row['a_id']; ?>
                        </th>
                        <td>
                            <?= $row['a_fn']; ?>
                        </td>
                        <td>
                            <?= $row['a_ln']; ?>
                        </td>
                        <td>
                            <?= $row['a_phone']; ?>
                        </td>
                        <td>
                            <?= $row['a_mail']; ?>
                        </td>
                        <td>
                            <?php
                    if ($row['a_role'] == 1) { ?>
                                <button class="add">
                        <a href="deletupdate/activeadmin.php?id=<?php echo $row['a_id'];?>">active</a>
                        </button>


                                <?php } else { ?>
                                <button class="remove">
                        <a href="deletupdate/activeadmin.php?id=<?php echo $row['a_id'];?>">Inactive</a>
                        </button>
                                <?php } ?>
                        </td>
                        <td>
                            <button class="update">
                        <a href="deletupdate/adminupdate.php?id=<?php echo $row['a_id'];?>">update</a>
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