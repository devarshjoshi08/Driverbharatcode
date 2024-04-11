<?php
include ('conn.php');
$id = $_GET['id'];
$fatch = "select * from admin_db where a_id = '$id'";
$run = mysqli_query($conn , $fatch);
$a_passfatch = mysqli_fetch_array($run);
$role = $a_passfatch['a_role'];

if ($role == 1) {
    $upd = " UPDATE `admin_db` SET `a_role`=0 WHERE a_id = $id ";
    $update = mysqli_query($conn , $upd);
    header('location:../admin.php');
}
if ($role == 0) {
    $upd = " UPDATE `admin_db` SET `a_role`= 1 WHERE a_id = $id ";
    $update = mysqli_query($conn , $upd);
    header('location:../admin.php');
}
?>