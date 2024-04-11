<?php 
    include ('conn.php');
    session_start();
    $mail = $_SESSION['emailadd'];

    $fatch = "select * from drivers_db where d_mail = '$mail' ";
    $query = mysqli_query($conn , $fatch);
    $run = mysqli_fetch_assoc($query);

    $id = $run['d_id'];

    if(isset($_POST['update'])) {
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $phone = $_POST['phone'];
        $add = $_POST['add'];

        $name = $fn.' '.$ln;

        $update = "UPDATE `drivers_db` SET `d_fn`='$fn',`d_ln`='$ln',`d_cnt`='$phone',`d_add`='$add' WHERE d_id = $id";
        $queryrun = mysqli_query($conn,$update);

        $personalupdate = "UPDATE `driverpersonal_db` SET `d_name`='$name',`d_cnt`='$phone' WHERE d_id = $id";
        $personalqueryrun = mysqli_query($conn,$personalupdate);
        
        if (($queryrun) && ($personalqueryrun)) {
            header('location: ../viewprofile.php');
        } else {
            header('location: ../viewprofile.php');
        }
    }

    if(isset($_POST['pupdate'])) {
        $phone = $_POST['phone'];
        $accountnumber = $_POST['anum'];
        $accountname = $_POST['an'];
        $bankname = $_POST['bn'];

        $bankupdate = "UPDATE `driverpersonal_db` SET `d_cnt`='$phone',`bank_name`='$bankname',`account_name`='$accountname',`account_no`='$accountnumber' WHERE d_id = $id";
        $bankqueryrun = mysqli_query($conn,$bankupdate);

        $update = "UPDATE `drivers_db` SET `d_cnt`='$phone' WHERE d_id = $id";
        $queryrun = mysqli_query($conn,$update);

        if ($bankqueryrun) {
            header('location: ../personal info.php');
        }
    }
    
    ?>