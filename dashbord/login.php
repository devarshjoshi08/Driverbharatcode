<?php
$servername = "localhost";
$username = "root";
$spassword = "";
$database = "driverbharat_db";

$conn = mysqli_connect($servername, $username, $spassword, $database);


// Create connection
if(isset($_POST['login'])) {

  $mail = $_POST['username'];
  $password = $_POST['password'];
  $pass = md5($password);

  $adminquery = "select * from admin_db where a_mail = '$mail' ";
  $aquery = mysqli_query($conn , $adminquery);
  $admincount = mysqli_num_rows($aquery);
  
  if($admincount>0) {
    $a_passfatch = mysqli_fetch_assoc($aquery);
    $a_dbpass = $a_passfatch['a_pass'];
    $role = $a_passfatch['a_role'];

    if($role == 1) {
      if($a_dbpass == $pass) {
        session_start();
        $_SESSION['mail'] = $mail;
        header('location:dashbord.php');     
      }     
      else {
        $wrongpass = "wrong password";
        header('location:adminlogin.php?passerror='.$wrongpass);
      }
    } else {
      $inactive = "Sorry your id has been disabled";
      header('location:adminlogin.php?inactiveadmin='.$inactive);
    }
  }
  else {
    $adminnot = "not a admin";
    header('location:adminlogin.php?notadmin='.$adminnot);
  }
}
?>