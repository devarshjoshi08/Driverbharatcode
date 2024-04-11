<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/booking.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Bookings</title>

    <?php
        session_start();

        if (!isset($_SESSION['emailadd'])) {
            header('location: ../index.php');
            alert("login first to access");
        }

        include ('php/conn.php');
        $mail = $_SESSION['emailadd'];
        $fatch = "select * from drivers_db where d_mail = '$mail' ";
        $query = mysqli_query($conn , $fatch);
        $run = mysqli_fetch_assoc($query);

        $id = $run['d_id'];
        $photo = $run['pic'];
        $fname = $run['d_fn'];
        $lname = $run['d_ln'];

        $query = " SELECT * FROM booking_db WHERE u_id = $id";
        $query_run = mysqli_query($conn, $query);
    ?>
</head>

<body>
<div class="banner">
    <div class="container w-50 h-75">
            <!-- --- left --- -->
        <div class="col-5 col-first">
            <div class="row">
                <div class="col">
                    <div class="imgdiv">
                        <?php
                            if ($photo == '') {
                        ?>
                            <img id="profileimg" src="pictures/default.jpg">
                        <?php
                            } else {
                        ?>
                            <img id="profileimg" src="<?php echo $photo; ?>">
                        <?php
                            }
                        ?>
                    </div>
                </div>

                <div class="col">
                    <h1 class="col-name">
                        <?php echo "$fname $lname"; ?>
                    </h1>
                </div>
                <div class="col btns">
                    <a href="profile.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                </div>
            </div>
        </div>
            <!-- --- right --- -->
        <div class="col-7 bookings">
        <?php
            $query = " SELECT * FROM booking_db WHERE d_id = $id";
            $query_run = mysqli_query($conn, $query);    
            while ($row = mysqli_fetch_array($query_run) ){
            $status  = $row['status']
        ?>
            <div class="card">
                <div class="card-header">
                    Booking id:
                    <?php echo $row['o_id']; ?>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <div class="row">
                            <div class="col">
                                Date: <?php echo $row['b_date']; ?>
                            </div>
                            <div class="col">
                                Amount: <?php echo $row['b_amount']; ?>
                            </div>
                        </div>
                    </p>
                    <?php
                        if($status == 1) {
                    ?>
                        <a href="bookingdetails.php?id=<?php echo $row['b_id'];?>" class="btn btn-success">View more</a>
                    <?php
                        } else if ($status == 2) {
                    ?>
                        <a href="#" class="btn btn-warning">Panding</a>
                    <?php
                        } else if ($status == 0) {
                    ?>
                        <a href="php/bookingdetails.php?id=<?php echo $row['b_id'];?>" class="btn btn-danger">Failed</a>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

    <script>
        document.getElementById("image").onchange = function() {
        document.getElementById('form').submit();
        }
    </script>
</body>

</html>