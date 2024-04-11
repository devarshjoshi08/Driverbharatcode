<?php

include ('conn.php');


$d_id = $_GET['id'];

session_start();
$uid = $_SESSION['uid'];


    $driverdetails = "SELECT * FROM drivers_db WHERE d_id = $d_id";
    $queryrun = mysqli_query($conn , $driverdetails);
    $fatchdata = mysqli_fetch_array($queryrun);
    $dname = $fatchdata['d_fn'].' '.$fatchdata['d_ln'];
    $dnumber = $fatchdata['d_cnt'];
    $d_id = $fatchdata['d_id'];
    $dmail = $fatchdata['d_mail'];
    $dcity = $fatchdata['d_city'];


    $payment = "SELECT * FROM payment_db WHERE p_id = $uid";
    $paymentqueryrun = mysqli_query($conn , $payment);
    $fatchpaymentdata = mysqli_fetch_array($paymentqueryrun);
    $p_id = $fatchpaymentdata['p_id'];
    // $p_date = $fatchpaymentdata['p_date'];
    $o_id = $fatchpaymentdata['o_id'];
    // $u_id = $fatchpaymentdata['u_id'];
    $sheduledate = Date($fatchpaymentdata['shedule_date']);
    $amount = $fatchpaymentdata['p_amount'];
    // $t_id = $fatchpaymentdata['t_id'];


    $insert = " UPDATE `booking_db` SET `d_id`='$d_id',`d_name`='$dname',`d_number`='$dnumber',`d_mail`='$dmail',`status`='1' WHERE o_id = '$o_id' ";
    $insertquery = mysqli_query($conn , $insert);

    if ($insertquery) {
       $deletquery = " DELETE FROM `payment_db` WHERE p_id = $p_id";
       $deletqueryrun = mysqli_query($conn,$deletquery);

       if ($deletqueryrun) {
           $update = "UPDATE `drivers_db` SET `ride`= 0 WHERE d_id = $d_id";
           $updatequery = mysqli_query($conn , $update);
        //    header('location: ../payments.php');
       }

        if($amount == 800) {
            $query = "SELECT * FROM `mini` WHERE o_id = '$o_id'";
            $run = mysqli_query($conn , $query);
            $fatch = mysqli_fetch_array($run);
            $printing = $fatch['o_id'];

            $delet = "UPDATE `mini` SET `status` = '1' WHERE o_id = '$o_id'";
            $deletqury = mysqli_query($conn , $delet);
            header('location: ../payments.php');

            $nextdate = date_create($sheduledate);
            date_add($nextdate , date_interval_create_from_date_string("0 days"));
            $new = date_format($nextdate , "Y-m-d");
            
            $updatedate = "UPDATE `drivers_db` SET `nextdate`= '$new' WHERE d_id = $d_id";
            $updatedatequery = mysqli_query($conn , $updatedate);
            header('location: ../payments.php');

           
        }

        if($amount == 3500) {
            $query = "SELECT * FROM `normal` WHERE o_id = '$o_id'";
            $run = mysqli_query($conn , $query);
            $fatch = mysqli_fetch_array($run);
            $printing = $fatch['o_id'];
            $delet = "UPDATE `normal` SET `status` = '1' WHERE o_id = '$o_id'";
            $deletqury = mysqli_query($conn , $delet);
            
            $nextdate = date_create($sheduledate);
            date_add($nextdate , date_interval_create_from_date_string("6 days"));
            $new = date_format($nextdate , "Y-m-d");
            
            $updatedate = "UPDATE `drivers_db` SET `nextdate`= '$new' WHERE d_id = $d_id";
            $updatedatequery = mysqli_query($conn , $updatedate);
            header('location: ../payments.php');
        }

        if($amount == 13000) {
            $query = "SELECT * FROM `max` WHERE o_id = '$o_id'";
            $run = mysqli_query($conn , $query);
            $fatch = mysqli_fetch_array($run);
            $printing = $fatch['o_id'];
            $delet = "UPDATE `max` SET `status` = '1' WHERE o_id = '$o_id'";
            $deletqury = mysqli_query($conn , $delet);
            
            $nextdate = date_create($sheduledate);
            date_add($nextdate , date_interval_create_from_date_string("29 days"));
            $new = date_format($nextdate , "Y-m-d");
            
            $updatedate = "UPDATE `drivers_db` SET `nextdate`= '$new' WHERE d_id = $d_id";
            $updatedatequery = mysqli_query($conn , $updatedate);
            header('location: ../payments.php');
        }
    }
    else {
        // header('location: ../payments.php');
    }



?>