<?php
include ('conn.php');
$id = $_GET['id'];
$fatch = "SELECT * FROM all_cities WHERE city_code = '$id'";
$run = mysqli_query($conn , $fatch);
$a_passfatch = mysqli_fetch_array($run);
$role = $a_passfatch['role'];
$code = $a_passfatch['state_code'];

if ($role == 1) {
    $upd = " UPDATE `all_cities` SET `role`= 0 WHERE city_code = $id ";
    $update = mysqli_query($conn , $upd);
    header("location:../city.php?id= $code");
}
if ($role == 0) {
    $upd = " UPDATE `all_cities` SET `role`= 1 WHERE city_code = $id ";
    $update = mysqli_query($conn , $upd);
    header("location:../city.php?id= $code");
}
?>