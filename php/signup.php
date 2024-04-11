<?php
include ("conn.php");
session_start();
// main code

if(isset($_POST['submit'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $mail = $_POST['mail'];
  $Phone = $_POST['Phone'];
  $pass = $_POST['pass'];
  $conpass = $_POST['conpass'];
  $state = $_POST['stated'];
  $city = $_POST['cityname'];
  $gender = $_POST['gender'];

  $statequery = "SELECT * FROM state_list WHERE id = $state";
  $statequeryrun = mysqli_query($conn, $statequery);
  $statefatch = mysqli_fetch_array($statequeryrun);
  $state_name = $statefatch['state'];

  $cityquery = "SELECT * FROM all_cities WHERE city_code = $city";
  $cityqueryrun = mysqli_query($conn, $cityquery);
  $cityfatch = mysqli_fetch_array($cityqueryrun);
  $city_name = $cityfatch['city_name'];

  $passw =md5($pass) ;
  $date = date('Y-m-d');
  // $conpassw = password_hash($pass, md5) ;

  
  $_SESSION['email'] = $mail;

  $emailquery = "select * from user_db where u_mail = '$mail' ";
  $query = mysqli_query($conn , $emailquery);
  $emailcount = mysqli_num_rows($query);

  $phonequery = "select * from user_db where u_contact = '$Phone' ";
  $phquery = mysqli_query($conn , $phonequery);
  $phonecount = mysqli_num_rows($phquery);

  if ($emailcount>0) {
    $mailerror ="email already register";
    header('location:../index.php?msg='.$mailerror);   
  }
  elseif ($phonecount >0) {
    $numerror ="Phone number already register";
    header('location:../index.php?nummsg='.$numerror);    
  }
  else{ 
    $insertquery = " INSERT INTO `user_db`(u_fn, u_ln, u_mail, u_contact, u_pass, u_city , u_state, u_gender,join_date) VALUES('$firstname', '$lastname', '$mail', '$Phone', '$passw', '$city' , '$state' , '$gender','$date')" ;
    if ($conn->query($insertquery) === TRUE) {
      $success = "Successfully register Login now";
      header('location:../home.php');
      
    } else {
      echo "Error: " . $insertquery . "<br>" . $conn->error;
    }
  }
}
?>