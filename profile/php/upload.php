<?php 

include ('conn.php');

session_start();
$mail = $_SESSION['email'];
$id = $_SESSION['userid'];

if(isset($_FILES["image"]["name"])) {
    $name = $fname;
    $uid = $id;

    $file = $_FILES['image'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    if($fileerror == 0) {
        $destfile = 'pictures/'.$filename;
        $query = " UPDATE user_db SET pic = '$destfile' WHERE u_id = $id";
        $queryrun = mysqli_query($conn, $query);
        move_uploaded_file($filepath , $destfile);

        header('location: ../profile.php');

    }
}
?>