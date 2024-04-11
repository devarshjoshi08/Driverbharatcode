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
                    <span class="input-group-text" id="inputGroup-sizing-sm">Booking Date</span>
                    <input disabled value="<?php echo $bookingdate; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
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
                    <span class="input-group-text" id="inputGroup-sizing-sm">Transection id</span>
                    <input disabled value="<?php echo $tid; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Driver name</span>
                    <input disabled value="<?php echo $drivername; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Driver number</span>
                    <input disabled value="<?php echo $dnumber; ?>" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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
            <div class="col-5">
                <div class="col btns">
                        <!-- <a href="functions/rating.php?id=<?php echo $id; ?>" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Rate this trip</a> -->
                        <button type="button" class="btn btn-outline-danger btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Rate this trip</button>
                </div>
            </div>
            <div class="col-4">
                <div class="col btns">
                        <a href="functions/complaint.php?id=<?php echo $id; ?>" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Complaint</a>
                </div>
            </div>
            <div class="col-3">
                <div class="col btns">
                    <a href="../booking.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                </div>
            </div>
            <div class="col-3">
                <div class="col btns">
                
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate this trip</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="functions/insertrating.php?oid=<?php echo $oid ?>" method="POST">
            <div class="mb-3 rating">
                <input type="radio" value="1" name="product_rating" checked id="rating1">
                <label for="rating1" class="bx bxs-star"></label>
                <input type="radio" value="2" name="product_rating" id="rating2">
                <label for="rating2" class="bx bxs-star"></label>
                <input type="radio" value="3" name="product_rating" id="rating3">
                <label for="rating3" class="bx bxs-star"></label>
                <input type="radio" value="4" name="product_rating" id="rating4">
                <label for="rating4" class="bx bxs-star"></label>
                <input type="radio" value="5" name="product_rating" id="rating5">
                <label for="rating5" class="bx bxs-star"></label>
            </div>
            <!-- <div class="modal-footer"> -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <!-- </div> -->
        </form>
        </div>
    </div>
  </div>
</div>
</div>
</div>
   
</body>

</html>