<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include ('conn.php');

    if(isset($_POST['submit'])) {
        $id = $_GET['id'];
        
        $mail = $_POST['email'];
        $phone = $_POST['phonenum'];
        $pass = $_POST['pass'];
        $mdpass = md5($pass);

        $match =  "SELECT * FROM admin_db WHERE a_mail = '$mail'";
        $queryrunn = mysqli_query($conn,$match);
        $mailexiest = mysqli_num_rows($queryrunn);

        $phmatch =  "SELECT * FROM admin_db WHERE a_phone = '$phone'";
        $phonerun = mysqli_query($conn,$phmatch);
        $phexiest = mysqli_num_rows($phonerun);
        if ($mailexiest > 0) {
            $p = "mail register";
        } else {
            if ($phexiest > 0) {
                $m = "phone already register";
                
            } else {
                $update = "UPDATE `admin_db` SET `a_phone`='$phone',`a_pass`='$mdpass',`a_mail`='$mail' WHERE a_id= $id";
        $queryrun = mysqli_query($conn,$update);
        header('location: ../admin.php');
            }
        }
        
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
        <h1>
        <div class="form">
            <form method="post" action="" onsubmit="return valid()">
                <input name="email" type="text" id="mail" placeholder="Email" required>
                <p id="mailspan"><?php if(isset($p)) { echo $p ;} ?></p>
                <input name="phonenum" type="text" id="phone" placeholder="Phone" required>
                <p id="number"><?php if(isset($m)) { echo $m ;} ?></p>
                <input name="pass" type="password" id="pass" placeholder="password" required>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function valid() {
        var fname = document.getElementById('fn').value;
        var lname = document.getElementById('ln').value;
        var mail = document.getElementById('mail').value;
        var phone = document.getElementById('phone').value;

        if (!isNaN(fname)) {
            document.getElementById('name').innerHTML =" invalid first name";
            return false;
        } else if (!isNaN(lname)) {
            document.getElementById('name').innerHtml = " invalid Last Name";
            return false;
        } else if (mail.indexOf('@')<= 0) {
            document.getElementById('mailspan').innerHtml = "invalid @ position";
            return false;
        } else if ((phone.length < 10) || (phone.length >10)) {
            document.getElementById('number').innerHTML = "only 10 digit are allowed";
            return false;
        } else {
            return true;
        }

    }
    </script>
</body>

</html>