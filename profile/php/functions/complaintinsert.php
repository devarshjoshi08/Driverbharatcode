<?php 
    include ('../conn.php');

    if(isset($_POST['submit'])) {
        $complaint = $_POST['complaint'];
        $oid = $_GET['oid'];


        $query = "SELECT * FROM booking_db WHERE o_id = '$oid'";
        $queryrun = mysqli_query($conn , $query);
        $fatch = mysqli_fetch_array($queryrun);

        $id = $fatch['b_id'];
        $uid = $fatch['u_id'];
        $uname = $fatch['u_name'];
        $did = $fatch['d_id'];
        $dname = $fatch['d_name'];
        $fdate = date("Y-m-d");
        $sheduledate = $fatch['shedule_date'];

        $usermail =  mysqli_query($conn , "SELECT * FROM user_db WHERE u_id = $uid");
        $fatching = mysqli_fetch_array($usermail);
        $umail = $fatching['u_mail'];
        echo $umail;

        $intofeedback = "INSERT INTO `complaint_db`(`u_id`, `u_name`, `d_id`, `d_name`, `o_id`, `u_mail`, `complaint`, `cmp_date`) VALUES ('$uid','$uname','$did`','$dname','$oid','$umail','$complaint','$fdate')";
        mysqli_query($conn,$intofeedback);
        header('location: ../bookingdetails.php?id='.$id);
    }

?>