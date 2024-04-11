<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location: ../../index.php');
    alert("login first to access");
}
?>

<?php
include 'conn.php';
$mail = $_SESSION['email'];
$fatch = "select * from user_db where u_mail = '$mail' ";
$query = mysqli_query($conn, $fatch);
$run = mysqli_fetch_assoc($query);
$dbpass = $run['u_pass'];

if (isset($_POST['check'])) {

$currentpass = $_POST['cp'];
$mdpass = md5($currentpass);

if ($mdpass == $dbpass) {
    $match = "Your password match enter new password";
    header('location: ../changepass.php?match='.$match);
    echo $match;
} else {
    $unmatch = "Your password not match";
    header('location: ../changepass.php?unmatch='.$unmatch);
    echo $unmatch;
}
}

if (isset($_POST['update'])) {
    
    $pass = $_POST['np'];
    $newmd = md5($pass);
    $conpas = $_POST['ncp'];
    
    $updatepass = "UPDATE `user_db` SET `u_pass`='$newmd' WHERE u_mail = '$mail'";
    $queryrun = mysqli_query($conn, $updatepass);
    
    if ($query) {
        $update = "Password update successfull";
        header('location: ../changepass.php?update='.$update);
    } else {
        $fail = "Sorry your password not change";
        header('location: ../changepass.php?fail='.$fail);
    }
}
?>