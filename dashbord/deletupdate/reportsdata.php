<?php

$mini = "select * from mini";
$query = mysqli_query($conn , $mini);
$minicount = mysqli_num_rows($query); 

$normal = "select * from normal";
$query = mysqli_query($conn , $normal);
$normalcount = mysqli_num_rows($query); 

$max = "select * from max";
$query = mysqli_query($conn , $max);
$maxcount = mysqli_num_rows($query);

$minrate= 800;
$nrate= 3500;
$mxrate= 13000;
$minirate = $minicount*$minrate;
$normalrate = $normalcount * $nrate;
$maxrate = $maxcount * $mxrate;

$users = "select * from user_db";
$query = mysqli_query($conn , $users);
$usercount = mysqli_num_rows($query);

$drivers = "select * from drivers_db";
$query = mysqli_query($conn , $drivers);
$driverscount = mysqli_num_rows($query);

?>