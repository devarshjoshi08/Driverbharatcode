<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: ../../index.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="../css/payment.css">
    <title>payment</title>

    <?php

    include ('../conn.php');
    $mail = $_SESSION['email'];
    $fatch = "select * from user_db where u_mail = '$mail' ";
    $query = mysqli_query($conn , $fatch);
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
    
    ?>
</head>

<body>   
      <div class="banner"> 
        <div class="payment">
            <div class="title">
                <h1>Checkout</h1>
            </div>
            <form method="post" action="insert.php">

            <?php

            $oid = 'ORD'.rand(10000,999999999);
            $tid = "TRANS".rand(10000,9999999);
            $cid = $id;
            $bdate = date("Y-m-d");
            ?>
            <div class="persondetails">
                <div class="left">
                    <p>Name: <?php echo $fname.' '.$lname; ?></p>
                    <p>Email: <?php echo $mail; ?></p>
                    <p>Address: <?php echo $address; ?></p>
                    <p>Number: <?php echo $phone; ?></p>
                </div>
                <div class="right">
                    <div>
                        <span>Date : </span>
                        <input name="bdate" value="<?php echo $bdate ; ?>" readonly="readonly">
                    </div>
                    <div>
                        <span>Order id : </span>
                        <input name="order" value="<?php echo $oid; ?>" readonly="readonly">
                    </div>
                    <div>
                        <span>Transection id:</span>
                        <input name="trans" value="<?php echo $tid; ?>" readonly="readonly">
                    </div>
                    <div>
                        <span>customer id : </span>
                        <input name="coust" value="<?php echo $cid; ?>" readonly="readonly">
                    </div>
                </div>
            </div>

            <?php 

            $packname = $_GET['name'];
            $amount = $_GET['amaount'];
            ?>

            <div class="details">
                <table>
                    <tr>
                        <td>Pack type</td>
                        <td>Date</td>
                        <td>Amount</td>
                    </tr>
                    <tr>
                        <td><input name="packname" value="<?php echo $packname; ?>" type="text" readonly="readonly"></td>
                        <td><input name="sheduledate" type="date" value="" id="datepicker"></td>
                        <td><input name="amount" value="<?php echo $amount; ?>" readonly="readonly"></td>
                    </tr>
                </table>
            </div>


            <div class="warning">
                <p>Please complete your profile before booking otherwise it will be reject</p>
            </div>

            <div class="btn">
                <button type="submit" name="insert">Book Now</button> <break>
                <a href="../package.php" type="submit" name="insert">Go Back </a>
            </div>
           
        </div>
       
</form>

    </div>

    <script type="text/javascript">
        var date = new Date();
        var tdate = date.getDate()+2;
        var month = date.getMonth() +1;
        if(tdate <10 ) {
            tdate = '0' + tdate;
        }
        if(month <10 ) {
            month = '0' + month;
        }
        var year = date.getUTCFullYear();
        var minDate = year + "-" + month + "-" + tdate;
        document.getElementById("datepicker").setAttribute('min',minDate);

  
</script>
</body>

</html>