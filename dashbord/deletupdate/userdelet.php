<?php
include ('conn.php');
$id = $_GET['id'];
$fatch = "select * from user_db where u_id = '$id'";
$run = mysqli_query($conn , $fatch);
$a_passfatch = mysqli_fetch_array($run);
$role = $a_passfatch['u_role'];

if ($role == 1) {
    $upd = " UPDATE `user_db` SET `u_role`=0 WHERE u_id = $id ";
    $update = mysqli_query($conn , $upd);
    header('location:../user.php');
}
if ($role == 0) {
    $upd = " UPDATE `user_db` SET `u_role`= 1 WHERE u_id = $id ";
    $update = mysqli_query($conn , $upd);
    header('location:../user.php');
}
?>