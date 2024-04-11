<?php

include ('../conn.php');
session_start();
$mail = $_SESSION['email'];
$query = "SELECT * FROM user_db WHERE u_mail = '$mail'";
$queryrun = mysqli_query($conn , $query);
$fatch = mysqli_fetch_array($queryrun);
$state = $fatch['u_state'];
$city = $fatch['u_city'];
$add = $fatch['u_add'];
$u_id = $fatch['u_id'];
$u_name = $fatch['u_fn'].' '.$fatch['u_ln'];
$u_number = $fatch['u_contact'];
$address = $fatch["u_add"];

if (isset($_POST['insert'])) {

$oid = $_POST["order"];
$tid = $_POST["trans"];
$sheduledate = $_POST["sheduledate"];
$bookingdate = $_POST["bdate"];
$packname = $_POST["packname"];
$amount = $_POST["amount"];


if(($oid=="") || ($tid == "") || ($sheduledate == "") || ($bookingdate =="") || ($packname == "") || ($amount =="") || ($add =="") ) {
    header('location: fail.php');
}
else {
$query = " INSERT INTO `payment_db`(`p_date`, `o_id`, `u_id`, `shedule_date`, `p_amount`, `p_name`, `t_id`, `city`, `state`, `u_add`) VALUES ('$bookingdate','$oid','$u_id','$sheduledate','$amount','$packname','$tid','$city','$state','$address') ";
$paymentquery = " INSERT INTO `booking_db`(`b_date`, `u_id`, `u_name`,`b_amount`, `t_id`, `u_number`, `city`, `state`, `shedule_date`, `o_id`, `u_address`) VALUES ('$bookingdate','$u_id','$u_name','$amount','$tid','$u_number','$city','$state','$sheduledate','$oid','$add')";
$queryrun = mysqli_query($conn , $query);
$paymentqueryrun = mysqli_query($conn , $paymentquery);
if ($queryrun) {
    if($amount == '800/-') {
        $mini = " INSERT INTO `mini`(`p_date`, `o_id`, `u_id`, `shedule_date`, `p_amount`, `p_name`, `t_id`, `city`, `state`) VALUES ('$bookingdate','$oid','$u_id','$sheduledate','$amount','$packname','$tid','$city','$state') ";
        $queryrun = mysqli_query($conn , $mini);
        header("location: success.php");
    }
    else if($amount == '3500/-') {
        $normal = " INSERT INTO `normal`(`p_date`, `o_id`, `u_id`, `shedule_date`, `p_amount`, `p_name`, `t_id`, `city`, `state`) VALUES ('$bookingdate','$oid','$u_id','$sheduledate','$amount','$packname','$tid','$city','$state') ";
        $queryrun = mysqli_query($conn , $normal);
        header('location: success.php');
    }
    else if($amount == '13000/-') {
        $max = " INSERT INTO `max`(`p_date`, `o_id`, `u_id`, `shedule_date`, `p_amount`, `p_name`, `t_id`, `city`, `state`) VALUES ('$bookingdate','$oid','$u_id','$sheduledate','$amount','$packname','$tid','$city','$state') ";
        $queryrun = mysqli_query($conn , $max);
        header('location: success.php');
    }
    else {
        echo "Booking failed";
    }
}
}
}

?>