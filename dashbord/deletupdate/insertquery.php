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
        $mdpass = md5($pass);

        $emailquery = "select * from admin_db where a_mail = '$mail' ";
        $query = mysqli_query($conn , $emailquery);
        $emailcount = mysqli_num_rows($query);

        $phonequery = "select * from admin_db where a_phone = '$phone' ";
        $phquery = mysqli_query($conn , $phonequery);
        $phonecount = mysqli_num_rows($phquery);

        if ($emailcount>0) {  
            ?>
                <script>
                    document.getElementById('mailspan').innerHTML="Email already register";
                </script>
            <?php    
        }
        else if ($phonecount >0) {
            ?>
               <script>
                    document.getElementById('number').innerHTML="Phone number already";
                </script>

             <?php    
        }
        else{
            $insertquery = "INSERT INTO `admin_db`(`a_fn`, `a_ln`, `a_phone`, `a_pass`, `a_mail`) VALUES ('$fn','$ln','$mdpass','$passw','$mail')";
            $queryrun = mysqli_query($conn, $insertquery);
            header('location: ../admin.php');
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
        <h1>Insert new admin details</h1>
        <div class="form">
            <form method="post" action="" onsubmit="return valid()">
                <input name="fn" type="text" id="fn" placeholder="First name" required>
                <input name="ln" type="text" id="ln" placeholder="Last name" required>
                <input name="email" type="email" id="mail" placeholder="Email" required>
                <p id="mailspan"></p>
                <input name="phonenum" type="text" id="phone" placeholder="Phone" required>
                <p id="number"></p>
                <input name="pass" type="password" id="pass" placeholder="password" required>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>

        function valid(){
            var mail = document.getElementById('mail').value;
            var phone = document.getElementById('phone').value;


            if (mail.indexOf('@')<=0) {
                document.getElementById('mailspan').innerHTML = "Email not valid";
                return false;
            } else if (mail.charAt(mail.length-4)!='.') {
                document.getElementById('mailspan').innerHTML = "only .com is allowed";
                return false;
            }else if ((phone.length <10) || (phone.lenght > 10)) {
                document.getElementById('number').innerHTML = "invalid phone number";
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>