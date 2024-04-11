<?php
include ('conn.php');
$id = $_GET['id'];
$fatch = "select * from drivers_db where d_id = '$id'";
$run = mysqli_query($conn , $fatch);
$a_passfatch = mysqli_fetch_array($run);
$role = $a_passfatch['d_role'];

if ($role == 1) {
    $upd = " UPDATE `drivers_db` SET `d_role`=0 WHERE d_id = $id ";
    $update = mysqli_query($conn , $upd);
    header('location:../driver.php');
}
if ($role == 0) {
    $upd = " UPDATE `drivers_db` SET `d_role`= 1 WHERE d_id = $id ";
    $update = mysqli_query($conn , $upd);
    header('location:../driver.php');
}
?>