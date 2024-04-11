<?php 
include ('conn.php');

    $mail = $_GET['id'];

    $user = "SELECT * FROM user_db WHERE u_mail = '$mail'";
    $run = mysqli_query($conn , $user);
    $fatch = mysqli_fetch_array($run);
    $role = $fatch['u_role'];

    $update = "UPDATE user_db SET u_role=1 WHERE u_mail = '$mail'";
    $queryrun = mysqli_query($conn , $update);

    if($queryrun) {
        $delet = "DELETE FROM `reactive` WHERE u_mail = '$mail'";
        $deletrun = mysqli_query($conn,$delet);
        header('location: ../reactive.php');
    }

?>