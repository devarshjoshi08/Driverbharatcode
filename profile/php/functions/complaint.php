<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../../../index.php');
}
?>
<head>
    <?php 
    include ('../conn.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM booking_db WHERE b_id = $id";
    $queryrun = mysqli_query($conn , $query);
    $fatch = mysqli_fetch_array($queryrun);

    $bookingdate = $fatch['b_date'];
    $drivername = $fatch['d_name'];
    $amount = $fatch['b_amount'];
    $tid = $fatch['t_id'];
    $dnumber = $fatch['d_number'];
    $sheduledate = $fatch['shedule_date'];
    $oid = $fatch['o_id'];
    $u_add = $fatch['u_address'];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../../css/complaint.css">
    <link rel="stylesheet" type="text/css" href="../../css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                <a class="navbar-brand" href="#"><img src="../../../img/pnglogo.png" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link bdlink active" aria-current="page" href="../../../home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../../../about us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../../../contact us.php">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container w-50 h-50">
            <form action="complaintinsert.php?oid=<?php echo $oid ; ?>" method="POST">
            <div class="row">
                <div class="col">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Booking Date</span>
                        <input value="<?php echo $bookingdate ; ?>" Readonly="on" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Shedule date</span>
                        <input value=" <?php echo $sheduledate ; ?>" Readonly="on" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Booking id</span>
                        <input value="<?php echo $oid ; ?>" Readonly="on" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
                <div class="col">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Transection id</span>
                        <input value="<?php echo $tid ; ?>" Readonly="on" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Complaint</span>
                        <textarea class="form-control" name="complaint" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <!-- <input value="" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> -->
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col">
                <div class="col btns">
                        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                        <!-- <a href="functions/complaint.php?id=<?php echo $id; ?>" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Submit</a> -->
                </div>
            </div>
            <div class="col">
                <div class="col btns">
                    <a href="../bookingdetails.php?id=<?php echo $id; ?>" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                </div>
            </div>
        </div>
        </form>
    </div>

    
</body>

</html>