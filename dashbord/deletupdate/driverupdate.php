<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include ('conn.php');

    $id = $_GET['id'];
    if(isset($_POST['submit'])) {
    
    $pass = $_POST['pass'];
    $mdpass = md5($pass);
    
    $driver = "SELECT * FROM drivers_db WHERE d_id = $id";
    $run = mysqli_query($conn , $driver);
        $fatch = mysqli_fetch_array($run);
        $mail = $fatch['d_mail'];
        $name = $fatch['d_fn'].' '.$fatch['d_ln'];
        $cnt = $fatch['d_cnt'];
        $licence = $fatch['licence_no'];
        $pancard = $fatch['d_pancard'];
        $adharcard = $fatch['d_adharcard'];
        
        $insert = "INSERT INTO `driverpersonal_db`(`d_name`, `d_mail`, `d_cnt`, `licence`, `pancard`, `adharcard`) VALUES ('$name','$mail','$cnt','$licence','$pancard','$adharcard')";
        $insertrun = mysqli_query($conn,$insert);
        
        $update = "UPDATE `drivers_db` SET `d_pass` = '$mdpass' WHERE d_id = $id";
        $queryrun = mysqli_query($conn,$update);
        header('location: ../driver.php');
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../css/insert.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert details</title>
</head>

<body>
    <div class="banner">
        <h1>Update Driver details</h1>
        <div class="form update">
            <form method="post" action="">
                <input name="pass" type="password" id="pass" placeholder="password">
                <button type="submit" name="submit">Submit</button>
            </form>

            
        </div>
    </div>
    
</body>

</html>