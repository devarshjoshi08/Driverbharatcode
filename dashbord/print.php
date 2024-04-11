<!DOCTYPE html>
<html>
<?php
include ("css/conn.php");
include ("deletupdate/logic.php");

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
    <link rel="stylesheet" href="css/reports.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Reports</title>
    <style>
table,
th,
td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
}

table {
    width: 50%;
    margin: 40px auto 40px auto;
    visibility: visible;
    display: table;
    text-align:center;
}
    </style>
</head>
<body>
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
                <td><?php echo $minicount ; ?></td>
                <td><?php echo $minisale ; ?></td>
            </tr>
            <tr>
                <td>Normal</td>
                <td><?php echo $normalcount ; ?></td>
                <td><?php echo $normalsale ; ?></td>
            </tr>
            <tr>
                <td>Max</td>
                <td><?php echo $maxcount ; ?></td>
                <td><?php echo $maxsale ; ?></td>
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
                <td><?php echo $mini7rows ; ?></td>
                <td><?php echo $mini7sales ; ?></td>
            </tr>
            <tr>
                <td>Normal</td>
                <td><?php echo $normal7rows ; ?></td>
                <td><?php echo $normal7sales ; ?></td>
            </tr>
            <tr>
                <td>Max</td>
                <td><?php echo $max7rows ; ?></td>
                <td><?php echo $max7sales ; ?></td>
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
                <td><?php echo $mini30rows ; ?></td>
                <td><?php echo $mini30sales ; ?></td>
            </tr>
            <tr>
                <td>Normal</td>
                <td><?php echo $normal30rows ; ?></td>
                <td><?php echo $normal30sales ; ?></td>
            </tr>
            <tr>
                <td>Max</td>
                <td><?php echo $max30rows ; ?></td>
                <td><?php echo $max30sales ; ?></td>
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
                <td><?php echo $drivercount ; ?></td>
                <td><?php echo $verifieddrivers ; ?></td>
                <td><?php echo $unverifieddrivers ; ?></td>
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
                <td><?php echo $activedrivercount ; ?></td>
                <td><?php echo $inactivedrivercount ; ?></td>
                <td><?php echo $Bandrivercount ; ?></td>
            </tr>
        </tbody>
    </table>
</div>
    <button class="add" name="print" onclick="print()">Print</button>
    <script>
        function full() {
            
        }

    </script>
</body>