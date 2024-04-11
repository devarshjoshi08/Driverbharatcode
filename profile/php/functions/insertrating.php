<?php 
    include ('../conn.php');

    if(isset($_POST['submit'])) {
        $rating = $_POST['product_rating'];
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

        $intofeedback = "INSERT INTO `feedback_db`(`u_id`, `u_name`, `d_id`, `d_name`, `o_id`, `f_date`, `f_rating` , `sheduled_date`) VALUES ('$uid','$uname','$did','$dname','$oid','$fdate','$rating','$sheduledate')";
        mysqli_query($conn,$intofeedback);
        header('location: ../bookingdetails.php?id='.$id);
    }

?>