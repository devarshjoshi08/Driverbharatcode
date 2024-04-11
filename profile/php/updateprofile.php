<?php
include 'conn.php';
session_start();
$mail = $_SESSION['email'];
$id = $_SESSION['userid'];

$userdata = "SELECT * FROM user_db WHERE u_id = $id";
$userrun = mysqli_query($conn, $userdata);
$fatch = mysqli_fetch_array($userrun);
$number = $fatch['u_contact'];

if (isset($_POST['update'])) {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $phone = $_POST['phone'];
    $gnd = $_POST['gender'];
    $st = $_POST['state'];
    $ct = $_POST['city'];
    $add = $_POST['add'];

    $phonematch = "SELECT * FROM user_db WHERE u_contact = $phone";
    $run = mysqli_query($conn, $phonematch);
    $fatch = mysqli_num_rows($run);

    if ($phone == $number) {
        $update = "UPDATE `user_db` SET `u_fn`='$fn',`u_ln`='$ln',`u_contact`=$phone,`u_gender`='$gnd',`u_add`='$add' WHERE u_id = '$id'";
        $queryrun = mysqli_query($conn, $update);
        header('location: ../visitprofile.php');
    } else {
        if ($fatch > 0) {
            $user = "Number already register";
            header('location: ../visitprofile.php?user=' . $user);
        } else {
            $update = "UPDATE `user_db` SET `u_fn`='$fn',`u_ln`='$ln',`u_contact`=$phone,`u_gender`='$gnd',`u_add`='$add' WHERE u_id = '$id'";
            $queryrun = mysqli_query($conn, $update);
            header('location: ../visitprofile.php');
        }
    }
}
