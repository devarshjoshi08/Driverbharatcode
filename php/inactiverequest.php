<?php
include('conn.php');
if(isset($_POST['reactive'])) {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $mail = $_POST['mail'];
    $phone = $_POST['cnt'];

    $mailmatch = "SELECT * FROM user_db WHERE u_mail = '$mail'";
    $mailrun = mysqli_query($conn , $mailmatch);
    $mailcount = mysqli_num_rows($mailrun);
    
    $phonematch = "SELECT * FROM user_db WHERE u_contact = $phone";
    $phonerun = mysqli_query($conn , $phonematch);
    $phonecount = mysqli_num_rows($phonerun);

    $date = date("Y-m-d");

    if ($mailcount > 0) {
        if($phonecount > 0) {
            $insert = "INSERT INTO `reactive`(`u_fn`, `u_ln`, `u_mail`, `u_phone`, `u_phone`) VALUES ('$fn','$ln','$mail','$phone','$date')";
            $run = mysqli_query($conn , $insert);
            if ($run) {
                $success = "Thank you , We will reactive your account soon";
                header('location: inactive.php?success='.$success);
            } else {
                $fail = "Sorry Server is down";
                header('location:inactiver.php?fail='.$fail);
            }
        } else {
            $phone = "Phone number not register";
            header('location:inactiver.php?nocoustomer='.$phone);
            
        }
    } else {
        $email = "E-mail not register";
        header('location:inactiver.php?nocoustomer='.$email);
    }
}
?>