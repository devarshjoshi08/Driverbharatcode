<!DOCTYPE html>
<html>

<?php
include ("php/conn.php");

?>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/driverlogin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="main">
    <p class="success"><?php if(isset($_GET['successmsg'])) { echo $_GET['successmsg']; } ?></p>
        <h1>Driver Login</h1>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button class="toggle-btn" type="button" onclick="login()">Login</button>
                <button class="toggle-btn" type="button" onclick="register()">Register</button>
            </div>
            <form action="php/login.php" class="login-form" id="loginform" method="post">
                <input type="text" class="form-felds" placeholder="E-mail" name="username" required>
                <p><?php if(isset($_GET['mailerror'])) { echo $_GET['mailerror']; } ?><p>
                <input type="password" class="form-felds" placeholder="Password" name="password" required>
                <p><?php if(isset($_GET['passerror'])) { echo $_GET['passerror']; } ?></p>
                <p><?php if(isset($_GET['diabled'])) { echo $_GET['diabled']; } ?></p>
                <button type="submit" class="login" name="login">Login</button>
                <a type="button" href="#" class="bottombtn">Forget Password?</a>
            </form>
            <!--  -->
            <form class="login-form" id="registerform" method="post" action="php/signup.php" onsubmit="return valid()" >
                    <div class="f123">
                        <input name="firstname" type="text" id="firstname" class="form-felds" placeholder="First name" required autocomplete="off">
                        <input name="lastname" type="text" id="lstname" class="form-felds" placeholder="Last name" required autocomplete="off">
                    </div>
                    <p id="name"></p>
                    <input name="mail" type="text" id="mail" class="form-felds" placeholder="Email" required autocomplete="off">
                    <p id="rmailspan"><?php if(isset($_GET['mailregister'])) { echo $_GET['mailregister']; } ?></p>
                    <div class="f123">
                    <input name="Phone" type="number" id="phone" class="form-felds" placeholder="phone number" required autocomplete="off">
                    <input name="licence" type="text" id="licence" class="form-felds" placeholder="Licence number" required autocomplete="off">
                </div>
                <p id="numberspan"><?php if(isset($_GET['phoneregister'])) { echo $_GET['phoneregister']; } ?></p>
                    <select name="gender">
	                    <option value="none" selected>Gender</option>
	                    <option value="male">Male</option>
	                    <option value="female">Female</option>
	                    <option value="other">other</option>
                    </select>
                    <div class="f123">
                        <select onChange="state()" id="statedd" name="stated">
                            <option>Select State</option>
                            <?php
                            $res= mysqli_query($conn,"SELECT * FROM state_list");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['state']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        
                            <select id="city" name="cityname">
                                <option value="">Select city</option>
                            </select>
                        
                    </div>

                    <div class="f123">
                    <input name="adcard" type="text" id="adcard" class="form-felds" placeholder="Adharcard" required autocomplete="off">
                    <input name="pancard" type="text" id="pancard" class="form-felds" placeholder="pan card" required autocomplete="off">
                    <p id="adharcard"><?php if(isset($_GET['adharregister'])) { echo $_GET['adharregister']; } ?></p>
                    <p id="pcard"><?php if(isset($_GET['panregister'])) { echo $_GET['panregister']; } ?></p>
                    </div>
                    <button type="submit" class="register" name="submit" >Register</button>
                </form>

        </div>
    </div>

    <script>
        var a = document.getElementById("btn");
        var b = document.getElementById("loginform");
        var c = document.getElementById("registerform");
        var d = document.getElementById("fb");
        var e = document.getElementById("insta");
        var f = document.getElementById("twt");
        var g = document.getElementById("icontag");

        function register() {
            a.style.left = "107px";
            b.style.left = "-400px";
            c.style.left = "50px";
            b.style.visibility = "hidden";
            c.style.top = "120px";
            c.style.visibility = "visible";
            d.style.fontSize = "15px";
            e.style.fontSize = "15px";
            f.style.fontSize = "15px";
            g.style.marginTop = "15px";
        }
        function login() {
            a.style.left = "0";
            b.style.left = "50px";
            b.style.visibility = "visible";
            c.style.left = "450px";
            c.style.top = "180px";
            c.style.visibility = "hidden";
            d.style.fontSize = "30px";
            e.style.fontSize = "30px";
            f.style.fontSize = "30px";
        }

        function valid() {
            var fname = document.getElementById('firstname').value;
            var lname = document.getElementById('lstname').value;
            var mail = document.getElementById('mail').value;
            var adhar = document.getElementById('adcard').value;
            var pan = document.getElementById('pancard').value;
            var phone = document.getElementById('phone').value;
                
                if (!isNaN(fname)) {
                    document.getElementById('name').innerHTML = "Please enter valid first Name";
                    return false;
                }else if (!isNaN(lname)) {
                    document.getElementById('name').innerHTML = "Please enter valid last Name";
                    return false;
                }else if (mail.indexOf('@')<= 0) {
                    document.getElementById('rmailspan').innerHTML = "envalid @ position";
                    return false;
                }else if (mail.charAt(mail.length-4)!='.') {
                    document.getElementById('rmailspan').innerHTML = "Only .com is allowed";
                    return false;
                }else if ((phone.length < 10) || (phone.length >10)) {
                    document.getElementById('numberspan').innerHTML = "only 10 digit allowed";
                    return false;
                }else if ((licence.length < 12) || (licence.length >12)) {
                    document.getElementById('numberspan').innerHTML = "Licence number invalid";
                    return false;
                }else if ((adhar.length < 12) || (adhar.length > 12)){
                    document.getElementById('adharcard').innerHTML = "invalid adhar card number remove space";
                    return false;
                }else if ((pan.length < 10) || (pan.length >10) ) {
                    document.getElementById('pcard').innerHTML = "invalid pan card number";
                    return false;
                }else{
                    return true;
                }
            }

            function state() {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "php/ajax.php?state=" + document.getElementById("statedd").value, false);
            xmlhttp.send(null);
            document.getElementById("city").innerHTML = xmlhttp.responseText;
            }
    </script>
</body>

</html>