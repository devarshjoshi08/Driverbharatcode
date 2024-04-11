<!DOCTYPE html>
<html lang="en">
    <?php
session_start();
if (!isset($_SESSION['emailadd'])) {
    header('location: ../index.php');
    alert("login first to access");
}
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/changepass.css">
    <title>Change password</title>
</head>
<body>
    <div class="main">
        <div class="success">
            <form action="pass.php" method="post">
                <input name="cp" type="password" placeholder="Current password">
                <p><?php if(isset($_GET['error'])) { echo $_GET['error']; }?></p>
                <input name="np" type="password" placeholder="New password">
                <input name="cnp" type="password" placeholder="Confirm new password">
                <p><?php if(isset($_GET['match'])) { echo $_GET['match']; }?></p>
                <div class="btn">
                <button type="submit" class="register">Change password</button>
                <button type="submit" class="register" name="submit"><a href="../profile.php">Baxk</a></button>
                </div>
            </form>
            <p><?php if(isset($_GET['not'])) { echo $_GET['not']; }?></p>
        </div>
    </div>
</body>
</html>