<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['emailadd'])) {
    header('location: ../index.php');
    alert("login first to access");
}
?>

<?php 
    include ('php/conn.php');
    $mail = $_SESSION['emailadd'];


    $fatch = "select * from drivers_db where d_mail = '$mail' ";
    $query = mysqli_query($conn , $fatch);
    $run = mysqli_fetch_assoc($query);

    $id = $run['d_id'];
    $fname = $run['d_fn'];
    $lname = $run['d_ln'];
    $ride = $run['ride'];
    $photo = $run['pic'];
    $nextdate = $run['nextdate'];

    $_SESSION['userid'] = $id;
    ?>

<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="banner">
        <div class="container w-50 h-50">
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
                    <div class="col labeldiv">
                        <form method="POST" action="php/function/upload.php" enctype="multipart/form-data" id="form">
                            <div class="round">
                                <input type="file" id="image" name="image" accept=".jpg, .png, .jpeg">
                                <label for="image"><i class='bx bxs-camera'></i> Change Photo</label>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <h1 class="col-name">
                            <?php echo "$fname $lname"; ?>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- --- right --- -->
            <div class="col-7">
                <div class="container h-100">
                    <div class="row rows1">
                        <div class="col">
                            <?php
                            $date = date("Y-m-d");
                            if($nextdate <= $date) {
                            if($ride == 1) {
                            ?>
                                <a href="php/acceptstop.php" class="btn btn-danger btn-lg" tabindex="1">Stop ride</a>
                            <?php
                            } else {
                            ?>
                                <a href="php/acceptstop.php" class="btn btn-success btn-lg" tabindex="2">Accept ride</a>
                            <?php 
                            }
                            } else if ($nextdate >= $date){
                            ?>
                                <a href="#" class="btn btn-warning btn-lg" tabindex="3">You are on ride</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="viewprofile.php">Visit profile </a></button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="booking.php">Bookings</a></button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="password.php">Change password</a></button>
                        </div>
                        
                        <div class="col">
                            <button type="button" class="btn btn-outline-danger"><a href="php/logout.php">Log out</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>

<script>
document.getElementById("image").onchange = function() {
document.getElementById('form').submit(); }
</script>

</html>