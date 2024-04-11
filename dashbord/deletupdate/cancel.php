<?php

include ('conn.php');


$o_id = $_GET['id'];

$payment = "SELECT * FROM payment_db WHERE o_id = '$o_id'";
$fatchrun = mysqli_query($conn , $payment);
$fatching = mysqli_fetch_array($fatchrun);
$amount = $fatching['p_amount'];


$bookingquery = "SELECT * FROM `booking_db` WHERE o_id = '$o_id'";
$bookingqueryrun = mysqli_query($conn , $bookingquery);
$fatch = mysqli_fetch_array($bookingqueryrun);
$printing = $fatch['o_id'];

$updatebooking = "UPDATE `booking_db` SET `status` = 0 WHERE o_id = '$o_id'";
$updatebookingqury = mysqli_query($conn , $updatebooking);

if($updatebookingqury) {

if($amount == 800) {

$query = "SELECT * FROM `mini` WHERE o_id = '$o_id'";
$run = mysqli_query($conn , $query);
$fatch = mysqli_fetch_array($run);
$printing = $fatch['o_id'];

$delet = "UPDATE `mini` SET `status` = 0 WHERE o_id = '$o_id'";
$deletqury = mysqli_query($conn , $delet);
// header('location: ../payments.php');

if($deletqury) {
    $paymentdelet = "DELETE FROM `payment_db` WHERE o_id = '$o_id'";
    $deletqueryrun = mysqli_query($conn,$paymentdelet);
    
        header('location: ../payments.php');
    
} else {
    header('location: ../payments.php');
}

}

else if($amount == 3500) {
$query = "SELECT * FROM `normal` WHERE o_id = '$o_id'";
$run = mysqli_query($conn , $query);
$fatch = mysqli_fetch_array($run);
$printing = $fatch['o_id'];

$delet = "UPDATE `normal` SET `status` = 0 WHERE o_id = '$o_id'";
$deletqury = mysqli_query($conn , $delet);

if($deletqury) {
    $deletquery = " DELETE FROM `payment_db` WHERE o_id = '$o_id'";
    $deletqueryrun = mysqli_query($conn,$deletquery);
    header('location: ../payments.php');
} else {
    header('location: ../payments.php');
}

} else if ($amount == 13000) {

$query = "SELECT * FROM  `max` WHERE o_id = '$o_id'";
$run = mysqli_query($conn , $query);
$fatch = mysqli_fetch_array($run);
$printing = $fatch['o_id'];

$delet = "UPDATE `max` SET `status` = 0 WHERE o_id = '$o_id'";
$deletqury = mysqli_query($conn , $delet);
// header('location: ../payments.php');

if($deletqury) {
    $deletquery = " DELETE FROM `payment_db` WHERE o_id = '$o_id'";
    $deletqueryrun = mysqli_query($conn,$deletquery);
    header('location: ../payments.php');
} else {
    header('location: ../payments.php');
}

}
}




?>