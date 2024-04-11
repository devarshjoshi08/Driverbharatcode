<?php

include ('conn.php');
session_start();
$mail = $_SESSION['emailadd'];

$fatch = "SELECT * FROM drivers_db WHERE d_mail = '$mail' ";
$query = mysqli_query($conn , $fatch);
$run = mysqli_fetch_assoc($query);

$dbpass = $run['d_pass'];

if (isset($_POST['check'])) {

    $currentpass = $_POST['cp'];
    $mdpass = md5($currentpass);
    
    if ($mdpass == $dbpass) {
        $match = "Your password match enter new password";
        header('location: ../password.php?match='.$match);
        echo $match;
    } else {
        $unmatch = "Your password not match";
        header('location: ../password.php?unmatch='.$unmatch);
        echo $unmatch;
    }
}


if (isset($_POST['update'])) {
    
    $pass = $_POST['np'];
    $newmd = md5($pass);
    $conpas = $_POST['ncp'];
    
    $updatepass = "UPDATE `drivers_db` SET `d_pass`='$newmd' WHERE d_mail = '$mail'";
    $queryrun = mysqli_query($conn, $updatepass);
    
    if ($queryrun) {
        $update = "Password update successfull";
        header('location: ../password.php?update='.$update);
    } else {
        $fail = "Sorry your password not change";
        // echo $fail;
        header('location: ../password.php?fail='.$fail);
    }
}


// $cp = $_POST['cp'];
//     $np = $_POST['np'];
//     $cnp = $_POST['cnp'];

//     $md5cp = md5($cp);
//     $md5np = md5($np);
//     $md5cnp = md5($cnp);

//     if ($md5cnp == $md5np) {
//         if ($md5cp = $dbpass) {
//             $update = "UPDATE `drivers_db` SET d_pass = '$md5np' WHERE d_mail = '$mail'";
//             $updaterun = mysqli_query($conn , $update);
//             if ($updaterun) {
//                 header('location: ../profile.php');
//             } else {
//                 $not = "Password not update";
//                 header('location: changepass.php?not='.$not);
                
//             }
//         } else {
//             $error = "password not match";
//             header('location: changepass.php?error='.$error);
//         }
        
//     } else {
//         $match = "New password and confirm password not match";
//         header('location: changepass.php?match='.$match);
//     }


?>