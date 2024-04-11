<?php
$mail = $_SESSION['email'];
$fatch = "select * from user_db where u_mail = '$mail' ";
$query = mysqli_query($conn, $fatch);
$run = mysqli_fetch_assoc($query);

$id = $run['u_id'];
$fname = $run['u_fn'];
$lname = $run['u_ln'];
$mail = $run['u_mail'];
$phone = $run['u_contact'];
$dbpass = $run['u_pass'];
$gender = $run['u_gender'];
$address = $run['u_add'];
$state = $run['u_state'];
$city = $run['u_city'];
$photo = $run['pic'];
$date = $run['join_date'];
$_SESSION['userid'] = $id;

$state_name = "SELECT * FROM state_list WHERE id =$state";
$staterun = mysqli_query($conn, $state_name);
$statefatch = mysqli_fetch_array($staterun);
$sname = $statefatch['state'];

$city_name = "SELECT * FROM all_cities WHERE city_code =$city";
$cityrun = mysqli_query($conn, $city_name);
$cityfatch = mysqli_fetch_array($cityrun);
$cname = $cityfatch['city_name'];

if (isset($_POST['changepass'])) {

    $currentpass = $_POST['current'];
    $mdpass = md5($currentpass);
    $pass = $_POST['new'];
    $newmd = md5($pass);
    $conpas = $_POST['newcon'];

    if ($mdpass == $dbpass) {
        $updatepass = "UPDATE `user_db` SET `u_pass`='$newmd' WHERE u_mail = '$mail'";
        $queryrun = mysqli_query($conn, $updatepass);
    } else {
        echo "password not match";
    }
}
?>