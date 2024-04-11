<?php 
    include ('conn.php');
    session_start();
    $mail = $_SESSION['emailadd'];

    $fatch = "select * from drivers_db where d_mail = '$mail' ";
    $query = mysqli_query($conn , $fatch);
    $run = mysqli_fetch_assoc($query);

    $id = $run['d_id'];
    $ride = $run['ride'];

    if ($ride == 1) {
        $upd = " UPDATE `drivers_db` SET `ride`=0 WHERE d_id = $id ";
        $update = mysqli_query($conn , $upd);
        header('location: ../profile.php');
    }
    if ($ride == 0) {
        $upd = " UPDATE `drivers_db` SET `ride`= 1 WHERE d_id = $id ";
        $update = mysqli_query($conn , $upd);
        header('location: ../profile.php');
    }

?>