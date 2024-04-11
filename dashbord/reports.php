<!DOCTYPE html>
<html>
<?php
include ("css/conn.php");
include ("deletupdate/logic.php");

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
        <link rel="stylesheet" href="css/reports.css">
        <title>Reports</title>
        <script>
            var admincount = <?php echo $admincount; ?>;
            var usercount = <?php echo $usercount; ?>;
            var drivercount = <?php echo $drivercount; ?>;

            // --- mini --- normal --- max --- count

            var minicount = <?php echo $minicount; ?>;
            var normalcount = <?php echo $normalcount; ?>;
            var maxcount = <?php echo $maxcount; ?>;

            // --- active --- inactive---onride-drivers---count---
            var activedrivercount = <?php echo $activedrivercount ; ?>;
            var inactivedrivercount = <?php echo $inactivedrivercount ; ?>;
            var Bandrivercount = <?php echo $Bandrivercount ; ?>;
            var onridedrivercount = <?php echo $onridedrivercount ; ?>;

            // --- sales---of---all---packs

            var minisale = <?php echo $minisale ; ?>;
            var normalsale = <?php echo $normalsale ; ?>;
            var maxsale = <?php echo $maxsale ; ?>;

            // --- success---fail---panding---orders

            var successcount = <?php echo $successcount ; ?>;
            var pandingcount = <?php echo $pandingcount ; ?>;
            var cancelcount = <?php echo $cancelcount ; ?>;

            // ---7---days---bookings

            var mini7rows = <?php echo $mini7rows ; ?>;
            var normal7rows = <?php echo $normal7rows ; ?>;
            var max7rows = <?php echo $max7rows ; ?>;

            // ---7---days---sales

            var mini7sales = <?php echo $mini7sales ; ?>;
            var normal7sales = <?php echo $normal7sales ; ?>;
            var max7sales = <?php echo $max7sales ; ?>;

            // ---30---days---bookings

            var mini30rows = <?php echo $mini30rows ; ?>;
            var normal30rows = <?php echo $normal30rows ; ?>;
            var max30rows = <?php echo $max30rows ; ?>;

            // ---30---days---sales

            var mini30sales = <?php echo $mini30sales ; ?>;
            var normal30sales = <?php echo $normal30sales ; ?>;
            var max30sales = <?php echo $max30sales ; ?>;
        </script>
        <!-- --- user---deriver -->



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
                        <a href="payments.php" class="nav__link">
                            <i class='bx bx-mail-send nav__icon'></i>
                            <span class="nav__name">Panding Request</span>
                        </a>
                        <a href="reports.php" class="nav__link active">
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
        <h1>Reports</h1>
        <div class="insertbtn">
            <button class="a" onclick="myfun('charting')"> <i class='bx bxs-printer'></i>Print Graph</button>
            <button class="a" onclick="myfun('table')"> <i class='bx bxs-printer'></i>Print table</button>
            <button class="a" onclick="myfun('both')"> <i class='bx bxs-printer'></i>Print Both</button>
        </div>

        <div id="both">
            <div class="chartss" id="charting">
                <div id="charts">
                    <div class="h3">
                        <h3>Total count in system</h3>
                    </div>
                    <div class="chartg">
                        <div id="piechart_3d" style="width: 350px; height: 350px;"></div>
                        <div id="barchart_material" style="width: 350px; height: 350px;"></div>
                        <div id="top_x_div" style="width: 350px; height: 350px;"></div>
                    </div>
                </div>

                <div id="charts">
                    <div class="h3">
                        <h3>Total Revenue </h3>
                    </div>
                    <div class="chartg">
                        <div id="salescount" style="width: 400px; height: 400px;"></div>
                        <div id="status" style="width: 400px; height: 400px;"></div>
                    </div>
                </div>

                <div id="charts">
                    <div class="h3">
                        <h3>7 Days Revenue and orders</h3>
                    </div>
                    <div class="chartg">
                        <div id="7dayordercount" style="width: 350px; height: 350px;"></div>
                        <div id="7daysale" style="width: 350px; height: 350px;"></div>
                    </div>
                </div>

                <div id="charts">
                    <div class="h3">
                        <h3>30 Days Revenue and orders</h3>
                    </div>
                    <div class="chartg">
                        <div id="30dayordercount" style="width: 350px; height: 350px;"></div>
                        <div id="30daysale" style="width: 350px; height: 350px;"></div>
                    </div>
                </div>
            </div>

            <div id="table">
                <div id="report">
                    <h1>Sales report</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Package type</td>
                                <td>Total Bookings</td>
                                <td>Total Revenue</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mini</td>
                                <td>
                                    <?php echo $minicount ; ?>
                                </td>
                                <td>
                                    <?php echo $minisale ; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Normal</td>
                                <td>
                                    <?php echo $normalcount ; ?>
                                </td>
                                <td>
                                    <?php echo $normalsale ; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Max</td>
                                <td>
                                    <?php echo $maxcount ; ?>
                                </td>
                                <td>
                                    <?php echo $maxsale ; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h1>7 day report</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Package type</td>
                                <td>Total Bookings</td>
                                <td>Total Revenue</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mini</td>
                                <td>
                                    <?php echo $mini7rows ; ?>
                                </td>
                                <td>
                                    <?php echo $mini7sales ; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Normal</td>
                                <td>
                                    <?php echo $normal7rows ; ?>
                                </td>
                                <td>
                                    <?php echo $normal7sales ; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Max</td>
                                <td>
                                    <?php echo $max7rows ; ?>
                                </td>
                                <td>
                                    <?php echo $max7sales ; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h1>1-Month Sales report</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Package type</td>
                                <td>Total Bookings</td>
                                <td>Total Revenue</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mini</td>
                                <td>
                                    <?php echo $mini30rows ; ?>
                                </td>
                                <td>
                                    <?php echo $mini30sales ; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Normal</td>
                                <td>
                                    <?php echo $normal30rows ; ?>
                                </td>
                                <td>
                                    <?php echo $normal30sales ; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Max</td>
                                <td>
                                    <?php echo $max30rows ; ?>
                                </td>
                                <td>
                                    <?php echo $max30sales ; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <h1>Drivers Report</h1>

                    <table>
                        <thead>
                            <tr>
                                <td>Total driver</td>
                                <td>Verified driver</td>
                                <td>Unverified driver</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $drivercount ; ?>
                                </td>
                                <td>
                                    <?php echo $verifieddrivers ; ?>
                                </td>
                                <td>
                                    <?php echo $unverifieddrivers ; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table>
                        <thead>
                            <tr>
                                <td>Active driver</td>
                                <td>Inactive driver</td>
                                <td>Ban driver</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $activedrivercount ; ?>
                                </td>
                                <td>
                                    <?php echo $inactivedrivercount ; ?>
                                </td>
                                <td>
                                    <?php echo $Bandrivercount ; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            google.charts.load("current", {
                packages: ["corechart"]
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Role', 'Count'],
                    ['admin', admincount],
                    ['user', usercount],
                    ['driver', drivercount]
                ]);

                var options = {
                    title: 'Admin user and drivers in system',
                    is3D: true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Total Mini order', 'Total normal order', 'Total Max order'],
                    ['2014', minicount, normalcount, maxcount]
                ]);

                var options = {
                    chart: {
                        title: 'Bookings',
                    },
                    bars: 'vertical' // Required for Material Bar Charts.
                };

                var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['bar']
            });
            google.charts.setOnLoadCallback(drawStuff);

            function drawStuff() {
                var data = new google.visualization.arrayToDataTable([
                    ['Type of driver', 'Count in number'],
                    ["Active", activedrivercount],
                    ["inactive", inactivedrivercount],
                    ["Ban", Bandrivercount],
                    ["On Drive", onridedrivercount]
                ]);

                var options = {
                    title: 'Driver status',
                    width: 300,
                    legend: {
                        position: 'none'
                    },
                    chart: {
                        title: 'Driver status',
                    },
                    bars: 'vertical', // Required for Material Bar Charts.
                    axes: {
                        x: {
                            0: {
                                side: 'top',
                                label: 'Number'
                            } // Top x-axis.
                        }
                    },
                    bar: {
                        groupWidth: "90%"
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                chart.draw(data, options);
            };
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Pack', 'Total sale'],
                    ['Mini', minisale],
                    ['Normal', normalsale],
                    ['max', maxsale]
                ]);

                var options = {
                    title: 'Total sales in INR'
                };

                var chart = new google.visualization.PieChart(document.getElementById('salescount'));

                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load("current", {
                packages: ["corechart"]
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['complete', successcount],
                    ['Panding', pandingcount],
                    ['Reject', cancelcount]
                ]);

                var options = {
                    title: 'Total order status',
                    is3D: true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('status'));
                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Pack', 'Orders'],
                    ['Mini', mini7rows],
                    ['Normal', normal7rows],
                    ['Max', max7rows]
                ]);

                var options = {
                    title: '7 Days order counts',
                };

                var chart = new google.visualization.PieChart(document.getElementById('7dayordercount'));

                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Pack', 'Orders'],
                    ['Mini', mini7sales],
                    ['Normal', normal7sales],
                    ['Max', max7sales]
                ]);

                var options = {
                    title: '7 Days order in INR'
                };

                var chart = new google.visualization.PieChart(document.getElementById('7daysale'));

                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Pack', 'Orders'],
                    ['Mini', mini30rows],
                    ['Normal', normal30rows],
                    ['Max', max30rows]
                ]);

                var options = {
                    title: '30 Days order counts'
                };

                var chart = new google.visualization.PieChart(document.getElementById('30dayordercount'));

                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Pack', 'Orders'],
                    ['Mini', mini30sales],
                    ['Normal', normal30sales],
                    ['Max', max30sales]
                ]);

                var options = {
                    title: '30 Days order in INR'
                };

                var chart = new google.visualization.PieChart(document.getElementById('30daysale'));

                chart.draw(data, options);
            }
        </script>

        <script type="text/javascript">
            function myfun(printing) {
                var backup = document.body.innerHTML;
                var print = document.getElementById(printing).innerHTML;
                document.body.innerHTML = print;
                window.print();
                document.body.innerHTML = backup;
            }
        </script>
    </body>

</html>