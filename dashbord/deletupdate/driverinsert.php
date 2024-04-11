<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include ('conn.php');

    if(isset($_POST['submit'])) {
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $mail = $_POST['email'];
        $phone = $_POST['phonenum'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        // $add = $_POST['add'];
        $adhar = $_POST['Adhar'];
        $pan = $_POST['pan'];
        $state = $_POST['state'];
        $city = $_POST['city'];

        $passw = md5($pass);

        $emailquery = "select * from drivers_db where d_mail = '$mail' ";
        $query = mysqli_query($conn , $emailquery);
        $emailcount = mysqli_num_rows($query);

        $phonequery = "select * from drivers_db where d_cnt = '$phone' ";
        $phquery = mysqli_query($conn , $phonequery);
        $phonecount = mysqli_num_rows($phquery);

        if ($emailcount>0) {  
               header('location:driverinsert.php');
            }
            else if ($phonecount >0) {
            header('location:driverinsert.php');
             
        }
        else{
            // echo $fn; echo $ln; echo $mail; echo $phone ; echo $pass; echo $gender; echo $add; echo $adhar;  echo $pan; echo $state; echo $city;
            $insertquery = "INSERT INTO drivers_db (d_fn , d_ln , d_mail, d_cnt, d_gender, d_pass, d_state, d_city) VALUES ('$fn','$ln','$mail','$phone','$gender','$passw',  '$state', '$city')";
            $queryrun = mysqli_query($conn, $insertquery);
            header('location: ../driver.php');
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
        <h1>Insert new Driver</h1>
        <div class="form">
            <form method="POST" action="" onsubmit="return validation()">
                <div class="name">
                    <input name="fn" type="text" id="fn" placeholder="First name" required>
                    <input name="ln" type="text" id="ln" placeholder="Last name" required>
                </div>
                <p id="name"></p>
                <div class="name">
                    <input name="email" type="text" id="mail" placeholder="Email" required>
                    <input name="phonenum" type="text" id="phone" placeholder="Phone" required>
                </div>
                <p id="number"></p>
                <div class="name flex">
                    <input name="pass" type="password" id="pass" placeholder="password" required>
                    <div class="gender">
                        <input type="radio" name="gender" value="Male"> male
                        <input type="radio" name="gender" value="Female"> female
                    </div>
                </div>
                <div class="name">
                    <input name="Adhar" type="text" id="adhar" placeholder="Adharcard Number" required>
                    <input name="pan" type="text" id="pan" placeholder="pan number" required>
                </div>
                <p id="adharc"></p>
                <div class="name">
                    <input name="state" type="text" id="state" placeholder="State">
                    <input name="city" type="text" id="city" placeholder="city">
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function validation() {
            var fname = document.getElementById('fn').value;
            var lname = document.getElementById('ln').value;
            var mail = document.getElementById('mail').value;
            var phone = document.getElementById('phone').value;
            var adhar = document.getElementById('adhar').value;
            var panc = document.getElementById('pan').value;

            if (!isNaN(fname)) {
                document.getElementById('name').innerHTML = "invalid first name";
                return false;
            } else if (!isNaN(lname)) {
                document.getElementById('name').innerHTML = "invalid last name";
                return false;
            } else if (mail.indexOf('@') <= 0) {
                document.getElementById('number').innerHTML = "invalid email";
                return false;
            } else if (mail.charAt(mail.length - 4) != '.') {
                document.getElementById('number').innerHTML = "invalid email";
                return false;
            } else if ((phone.length < 10) || (phone.length > 10)) {
                document.getElementById('number').innerHTML = "invalid phone number";
                return false;
            }else if ((adhar.length < 12) || (adhar.length > 12)) {
                document.getElementById('adharc').innerHTML = "invalid Adhar card number";
                return false;
            }else if ((panc.length < 10) || (panc.length > 10)) {
                document.getElementById('adharc').innerHTML = "invalid pan number";
                return false;
            }else {
                return true;
            }
        }
    </script>
</body>

</html>