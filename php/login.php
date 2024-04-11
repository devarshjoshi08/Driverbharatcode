<?php

$servername = "localhost";
$username = "root";
$spassword = "";
$database = "driverbharat_db";

$conn = mysqli_connect($servername, $username, $spassword, $database);
// Create connection

session_start();
if(isset($_POST['login'])) {
    
    $email = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $emailquery = "select * from user_db where u_mail = '$email' ";
    $query = mysqli_query($conn , $emailquery);
    $emailcount = mysqli_num_rows($query);
    
    if($emailcount>0) {
        $passfatch = mysqli_fetch_assoc($query);
        $dbpass = $passfatch['u_pass'];
        $passw = md5($password);
        $role = $passfatch['u_role'];
        $_SESSION['email'] = $passfatch['u_mail'];

        if($role == 1) {
            if($passw == $dbpass) {
                header('location:../home.php'); 
            } else {
                $passerror = "wrong password";
                header('location: ../index.php?errorpass='. $passerror);
            }
        }else if ($role == 3) {
            header('location: banaccount.php');
        } else {
            $inactive = "Sorry your id has been disabled";
            header('location: inactive.php?inactive='. $inactive);
        }
    }
    else 
    {
        $mailerror = "wrong email";
        header('location: ../index.php?errormail='. $mailerror);
    }
}
?>