

<?php
include ("conn.php");

// main code

if(isset($_POST['submit'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $mail = $_POST['mail'];
  $num = $_POST['Phone'];
  $licence = $_POST['licence'];
  $adcard = $_POST['adcard'];
  $pcard = $_POST['pancard'];
  $gender = $_POST['gender'];
  $state = $_POST['stated'];
  $city = $_POST['cityname'];
  $name = $firstname.' '.$lastname;

  $emailquery = "select * from drivers_db where d_mail = '$mail' ";
  $query = mysqli_query($conn , $emailquery);
  $emailcount = mysqli_num_rows($query);

  $phonequery = "select * from drivers_db where d_cnt = '$num' ";
  $phquery = mysqli_query($conn , $phonequery);
  $phonecount = mysqli_num_rows($phquery);

  $adharquery = "select * from drivers_db where d_adharcard = '$adcard' ";
  $adquery = mysqli_query($conn , $adharquery);
  $adharcount = mysqli_num_rows($adquery);

  $panquery = "select * from drivers_db where d_pancard = '$pcard' ";
  $pancquery = mysqli_query($conn , $panquery);
  $pancount = mysqli_num_rows($pancquery);

  if ($emailcount>0) {
    $mailerror ="email already register";
    header('location:../driverlogin.php?mailregister='.$mailerror);   
  }
  else if ($phonecount >0) {
    $numerror ="Phone number already register";
    header('location:../driverlogin.php?phoneregister='.$numerror);    
  }
  else if ($adharcount >0) {
    $adharcard ="Adharcard number already register";
    header('location:../driverlogin.php?adharregister='.$adharcard);    
  }
  else if ($pancount >0) {
    $pan ="Pan number already register";
    header('location:../driverlogin.php?panregister='.$pan);    
  }
  else{ 
    $insertquery = " INSERT INTO `drivers_db`(`d_fn`, `d_ln`, `d_mail`, `d_cnt`, `licence_no`, `d_adharcard`, `d_pancard`, `d_gender`, `d_city`, `d_state`) VALUES ('$firstname','$lastname','$mail','$num','$licence','$adcard','$pcard','$gender','$city','$state')" ;
    $dbquery = mysqli_query($conn,$insertquery);
    if ($dbquery)  {
      $success = "Successfully register Our team contact you as soon as possible";
      header('location: register.php');
    } else {
      echo "Error: Sorry our server is down ";
    }
  }
}
?>