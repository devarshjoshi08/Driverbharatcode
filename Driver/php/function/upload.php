<?php 

include ('../conn.php');

session_start();
$mail = $_SESSION['emailadd'];
$id = $_SESSION['userid'];

if(isset($_FILES["image"]["name"])) {
    $name = $fname;
    $uid = $id;

    $file = $_FILES['image'];

    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];
    if($fileerror == 0) {
        $picname = 'pictures/'.$filename;
        $destfiles = '../../pictures/'.$filename;
        $query = " UPDATE drivers_db SET pic = '$picname' WHERE d_id = $id";
        $queryrun = mysqli_query($conn, $query);
        move_uploaded_file($filepath , $destfiles);

        header('location: ../../profile.php');

    }
}
?>