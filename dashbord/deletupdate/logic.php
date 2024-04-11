<?php
include ("conn.php");

// ---admin---user---driver---count---

$user = "SELECT * FROM user_db";
$query = mysqli_query($conn , $user);
$usercount = mysqli_num_rows($query);

$driver = "SELECT * FROM drivers_db";
$query = mysqli_query($conn , $driver);
$drivercount = mysqli_num_rows($query);

$admin = "SELECT * FROM admin_db";
$query = mysqli_query($conn , $admin);
$admincount = mysqli_num_rows($query);

// ---Mini---normal---max---count---

$mini = "SELECT * FROM mini";
$query = mysqli_query($conn , $mini);
$minicount = mysqli_num_rows($query);

$normal = "SELECT * FROM normal";
$query = mysqli_query($conn , $normal);
$normalcount = mysqli_num_rows($query);

$max = "SELECT * FROM max";
$query = mysqli_query($conn , $max);
$maxcount = mysqli_num_rows($query);

// ---success---fail---panding---count---

$success = "SELECT * FROM booking_db WHERE status = 1 ";
$query = mysqli_query($conn , $success);
$successcount = mysqli_num_rows($query);

$panding = "SELECT * FROM booking_db WHERE status = 2 ";
$query = mysqli_query($conn , $panding);
$pandingcount = mysqli_num_rows($query);

$cancel = "SELECT * FROM booking_db WHERE status = 0 ";
$query = mysqli_query($conn , $cancel);
$cancelcount = mysqli_num_rows($query);

// ---active---onride---drivers

$activedriver = "SELECT * FROM drivers_db WHERE (d_role= 1) & (d_pass != '') ";
$query = mysqli_query($conn , $activedriver);
$activedrivercount = mysqli_num_rows($query);

$inactivedriver = "SELECT * FROM drivers_db WHERE (d_role= 0) & (d_pass != '') ";
$query = mysqli_query($conn , $inactivedriver);
$inactivedrivercount = mysqli_num_rows($query);

$bandriver = "SELECT * FROM drivers_db WHERE (d_role= 3) & (d_pass != '') ";
$banquery = mysqli_query($conn , $bandriver);
$Bandrivercount = mysqli_num_rows($banquery);

$onridedriver = "SELECT * FROM drivers_db WHERE (ride= 0) & (d_pass != '') ";
$query = mysqli_query($conn , $onridedriver);
$onridedrivercount = mysqli_num_rows($query);

// ---mini---normal---max---total---sales---

$minirate = 800;
$minisale = $minicount * $minirate;  // count comming from top mini normal max count section

$normalrate = 3500;
$normalsale = $normalcount * $normalrate;  // count comming from top mini normal max count section

$maxrate = 13000;
$maxsale = $maxcount * $maxrate;  // count comming from top mini normal max count section

// ---7---days---sales---report---data---

$mini7daysquery = " SELECT * FROM mini
where p_date > now() - INTERVAL 7 day;";
$miniqueyrun = mysqli_query($conn , $mini7daysquery);
$mini7rows = mysqli_num_rows($miniqueyrun);
$mini7sales = $mini7rows * $minirate;  // rate comming from upper section

$normal7daysquery = " SELECT * FROM normal
where p_date > now() - INTERVAL 7 day;" ;
$normalqueyrun = mysqli_query($conn , $normal7daysquery);
$normal7rows = mysqli_num_rows($normalqueyrun);
$normal7sales = $normal7rows * $normalrate;  // rate comming from upper section

$max7daysquery = " SELECT * FROM max
where p_date > now() - INTERVAL 7 day;" ;
$maxqueyrun = mysqli_query($conn , $max7daysquery);
$max7rows = mysqli_num_rows($maxqueyrun);
$max7sales = $max7rows * $maxsale;  // rate comming from upper section

// --- 1 --- month --- sale

$mini30daysquery = " SELECT * FROM mini
where p_date > now() - INTERVAL 30 day;";
$miniqueyrun = mysqli_query($conn , $mini30daysquery);
$mini30rows = mysqli_num_rows($miniqueyrun);
$mini30sales = $mini30rows * $minirate;  // rate comming from upper section

$normal30daysquery = " SELECT * FROM normal
where p_date > now() - INTERVAL 30 day;" ;
$normalqueyrun = mysqli_query($conn , $normal30daysquery);
$normal30rows = mysqli_num_rows($normalqueyrun);
$normal30sales = $normal30rows * $normalrate;  // rate comming from upper section

$max30daysquery = " SELECT * FROM max
where p_date > now() - INTERVAL 30 day;" ;
$maxqueyrun = mysqli_query($conn , $max30daysquery);
$max30rows = mysqli_num_rows($maxqueyrun);
$max30sales = $max30rows * $maxsale;  // rate comming from upper section

// --- driver --- status ----

$unverified = "SELECT * FROM drivers_db WHERE d_pass = '' ";
$unverifiedrun = mysqli_query($conn , $unverified);
$unverifieddrivers = mysqli_num_rows($unverifiedrun);

$verifieddrivers = $drivercount - $unverifieddrivers;
?>