<!DOCTYPE html>
<html>
<?php
session_start();
$mail = $_SESSION['email'];
include ('php/conn.php');
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$emailquery = "SELECT * FROM user_db WHERE u_mail = '$mail' ";
$query = mysqli_query($conn , $emailquery);
$fatch = mysqli_fetch_assoc($query);
$fname = $fatch['u_fn'];
$lname = $fatch['u_ln'];
$id = $fatch['u_id'];

if(isset($_POST['complaint'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $comment = $_POST['subject'];
    $date = date("Y-m-d");

    $insertquery = "INSERT INTO `contact_db`(`u_id`,`u_name`,`u_mail`,`detail`,`date`) VALUES ('$id','$name','$email','$comment','$date')";
    $queryrun = mysqli_query($conn,$insertquery);
    if ($queryrun) {
    $success = "Detail submit successfully";
    } else {
    echo "still not working";
    }
}
?>

    <head>
        <link rel="stylesheet" type="text/css" href="css/contactus.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <title>DriverBharat</title>
    </head>

    <body>
        <div class="banner">
        <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/pnglogo.png" alt="" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link bdlink" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bdlink" href="about us.php">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active bdlink" href="#">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile/profile.php"><i class="far fa-user-circle"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <form action="" method="post">
                    <label for="fname">Full Name</label>
                    <input type="text" id="fname" name="name" value="<?php echo $fname.' '.$lname;  ?>" readonly='on'>

                    <label for="lname">Email</label>
                    <input type="text" id="lname" name="email" value="<?php echo $mail  ?>" readonly='on'>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    <input type="submit" value="Submit" name="complaint">
                </form>
            </div>

        </div>
    </body>

</html>