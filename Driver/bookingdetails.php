<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['emailadd'])) {
    header('location: ../../index.php');
}
?>
<head>
    <?php 
    include ('php/conn.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM booking_db WHERE b_id = $id";
    $queryrun = mysqli_query($conn , $query);
    $fatch = mysqli_fetch_array($queryrun);

    // $bookingdate = $fatch['b_date'];
    $username = $fatch['u_name'];
    $amount = $fatch['b_amount'];
    // $tid = $fatch['t_id'];
    $unumber = $fatch['u_number'];
    $sheduledate = $fatch['shedule_date'];
    $oid = $fatch['o_id'];
    $u_add = $fatch['u_address'];

    $fdback = "SELECT * FROM feedback_db WHERE o_id = '$oid'";
    $ratingrun = mysqli_query($conn , $fdback);
    $ratingfatch = mysqli_fetch_array($ratingrun);

    $rating = $ratingfatch['f_rating'];
    ?>

    <link rel="stylesheet" href="css/bookingdetails.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Insert details</title>
</head>

<body>
<div class="banner">
    <div class="container w-50 h-50">

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Shedule date</span>
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
                    <span class="input-group-text" id="inputGroup-sizing-sm">order id</span>
                    <input disabled value="<?php echo $oid; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Rating</span>
                    
                    <input disabled value="<?php echo $rating; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">User name</span>
                    <input disabled value="<?php echo $username; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">User number</span>
                    <input disabled value="<?php echo $unumber; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
                    <input disabled value="<?php echo $u_add; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="col btns">
                    <a href="booking.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
   
</body>

</html>