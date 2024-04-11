<!DOCTYPE html>
<html>
 <?php
    include ('login.php');
?> 

<head>
    <title>admin panel login</title>
    <link rel="stylesheet" href="css/adminlogin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>
    <div class="main">
        <div class="welcome">
            <div class="box">
                <i class="fab fa-keycdn"></i>
                <h1>Admin Login</h1>
                <form class="form" action="login.php" method="post" onsubmit="return valid()">
                    <div>
                        <!-- <i class="fa fa-user">  </i> -->
                        <input type="text" class="logintext" name="username" placeholder="E-mail" id="loginusername" required>
                        <p id="mail"><?php if(isset($_GET['notadmin'])) { echo $_GET['notadmin']; } ?></p>
                    </div>

                    <div>
                        <!-- <i class="fa fa-lock lock">  </i> -->
                        <input type="password" class="logintext" name="password" placeholder="Password" id="loginpassword" required>
                        <p><?php if(isset($_GET['passerror'])) { echo $_GET['passerror']; } ?></p>
                        <p><?php if(isset($_GET['inactiveadmin'])) { echo $_GET['inactiveadmin']; } ?></p>
                    </div>
                    <button type="submit" name="login" class="signin"> Login </button>
                </form>
            </div>
        </div>
    </div>

    <script>

        function valid() {
            var mail = document.getElementById('loginusername').value;

            if (mail.indexOf('@') <= 0) {
                document.getElementById('mail').innerHTML = "wrong email";
                return false;
            } else if (mail.charAt(mail.length-4) != '.') {
                document.getElementById('mail').innerHTML = "wrong emaill";
                return false;
            } else {
                return true;
            }
        }

    </script>

</body>

</html>