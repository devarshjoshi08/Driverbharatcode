<?php
include('conn.php');
$id = $_GET['id'];

$query = "UPDATE all_cities SET role = 0 WHERE state_code = $id";
$run= mysqli_query($conn , $query);
if($run) {
header('location: ../state.php');
}
else {
header('location: ../state.php');
}


?>