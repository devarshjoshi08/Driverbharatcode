<?php
include ('conn.php');

session_start();
$mail = $_SESSION['emailadd'];

$bname = $_POST['bname'];
$accountname = $_POST['aname'];
$accountnumber = $_POST['ano'];
$pas = $_POST['pass'];
$pass = md5($pas);

$driver = "SELECT * FROM drivers_db WHERE d_mail = '$mail'";
$driverrun = mysqli_query($conn , $driver);
$fatch = mysqli_fetch_array($driverrun);

$dbpass = $fatch['d_pass'];

if ($dbpass == $pass) {
    $insert = "UPDATE `driverpersonal_db` SET `bank_name`='$bname',`account_name`='$accountname',`account_no`='$accountnumber' WHERE d_mail = '$mail'";
    $run = mysqli_query($conn , $insert);

    if($run) {
        header('location:../profile.php');
    } else {
        $insertfail = "Due to some reason updation failed please check data and try again";
        header('location:../bank.php?error='.$insertfail);
    }
} else {
    $passerror = "Check your password";
    header('location: ../bank.php?passerror='.$passerror);
}

?>