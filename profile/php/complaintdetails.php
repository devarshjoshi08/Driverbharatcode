<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../../index.php');
}
?>
<head>
    <?php 
    include ('conn.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM complaint_db WHERE cmp_id = $id";
    $queryrun = mysqli_query($conn , $query);
    $fatch = mysqli_fetch_array($queryrun);

    $complaintdate = $fatch['cmp_date'];
    $drivername = $fatch['d_name'];
    $oid = $fatch['o_id'];
    $complaint = $fatch['complaint'];
    $reply = $fatch['reply'];

    $bkquery = "SELECT * FROM booking_db WHERE o_id = '$oid'";
    $bkqueryrun = mysqli_query($conn , $bkquery);
    $bkfatch = mysqli_fetch_array($bkqueryrun);

    $amount = $bkfatch['b_amount'];
    $tid = $bkfatch['t_id'];
    $sheduledate = $bkfatch['shedule_date'];
    ?>

    <link rel="stylesheet" href="../css/bookingdetails.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Insert details</title>
</head>

<body>
    <div class="banner">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../../img/pnglogo.png" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link bdlink" aria-current="page" href="../../home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../../about us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../../contact us.php">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container w-50 h-50">

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Complaint Date</span>
                    <input disabled value="<?php echo $complaintdate; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Booking date</span>
                    <input disabled value="<?php echo $sheduledate; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Amount</span>
                    <input disabled value="<?php echo $amount.'/-'; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Booking id</span>
                    <input disabled value="<?php echo $oid; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Transection id</span>
                    <input disabled value="<?php echo $tid; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Driver name</span>
                    <input disabled value="<?php echo $drivername; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Complaint</span>
                    <textarea class="form-control" Readonly="on" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 50px"><?php echo $complaint; ?></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Reply</span>
                    <textarea class="form-control" Readonly="on" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 50px"><?php echo $reply; ?></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="col btns">
                    <a href="../complaints.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</body>

</html>