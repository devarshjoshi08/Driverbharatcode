<?php

$servername = "localhost";
$username = "root";
$spassword = "";
$database = "driverbharat_db";

$conn = mysqli_connect($servername, $username, $spassword, $database);
// Create connection

session_start();
if(isset($_POST['login'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $emailquery = "select * from drivers_db where d_mail = '$name' ";
    $query = mysqli_query($conn , $emailquery);
    $emailcount = mysqli_num_rows($query);

    $bankcheck = "SELECT * FROM driverpersonal_db WHERE d_mail = '$name'";
    $checkrun = mysqli_query($conn,$bankcheck);
    $match = mysqli_fetch_array($checkrun);

    $accountno = $match['account_no'];
    $emp = empty($accountno);
    
    if($emailcount>0) {
        $pass = md5($password);
        $passfatch = mysqli_fetch_assoc($query);
        $dbpass = $passfatch['d_pass'];
        $role = $passfatch['d_role'];
        
        if ($role == 1) {
            if($pass == $dbpass) {
                if ($accountno == '') {
                    $_SESSION['emailadd'] = $passfatch['d_mail'];
                    header('location: ../bank.php');
                } else {
                    header('location: ../profile.php');
                    $_SESSION['emailadd'] = $passfatch['d_mail'];
                }
            } else {
                $disabled = "Incorrect password";
                header('location: ../driverlogin.php?diabled='.$disabled);
            }
        }else if ($role == 3) {
            header('location: role/banaccount.php');
        } else {
                header('location: role/inactive.php');
            }
        }
        else 
        {
            $mailerror = "Please chek your email address";
            header('location: ../driverlogin.php?mailerror='.$mailerror);

    }
}
?>