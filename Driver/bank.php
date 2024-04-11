<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['emailadd'])) {
    header('location: ../index.php');
    alert("login first to access");
}

include ('php/conn.php');
$mail = $_SESSION['emailadd'];

$fatch = "SELECT * FROM driverpersonal_db WHERE d_mail = '$mail' ";
$query = mysqli_query($conn , $fatch);
$run = mysqli_fetch_assoc($query);

$name = $run['d_name'];
$mail = $run['d_mail'];
$cnt = $run['d_cnt'];


?>
<head>
    <title>Details</title>
    <link rel="stylesheet" href="css/bank.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

    <body>
        <div class="banner">
            <div class="profile">
                <form action="php/bankdata.php" method="post" id="editform">
                    <input type="text" value=" Name : <?php echo $name ; ?> " readonly="on">
                    <input type="text" value=" E-mail : <?php echo $mail ; ?> " readonly="on">
                    <input type="text" value=" Phone number : <?php echo $cnt ; ?> " readonly="on">
                    <input name="bname" type="text" placeholder="Bank name" required>
                    <input name="aname" type="text" placeholder="Account holder name" required>
                    <input name="ano" type="text" placeholder="Account number" required>
                    <input name="pass" type="password" placeholder="DRIVERBHARAT password" required>
                    <p><?php if(isset($_GET['error'])) { echo $_GE['error']; } ?></p>
                    <p><?php if(isset($_GET['passerror'])) { echo $_GE['passerror']; } ?></p>

                    <button type="submit" class="register" name="submit">Register</button>
                </form>
            </div>
        </div>
    </body>
</html>