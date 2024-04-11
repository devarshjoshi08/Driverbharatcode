<!DOCTYPE html>
<html>

<?php

include ('../conn.php');

?>

    <head>
        <title>Re-actve</title>
        <link rel="stylesheet" href="../../../css/inactive.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="main">
            <h1>SORRY YOUR ACCOUNT HAS BEEN DISABLED</h1>
                <div class="box">
                    <!-- <div class="title"> -->
                    <!-- </div> -->
                    <div class="part">
                    <div class="left">
                        <?php
                        if (isset($_GET['fail'])) {
                            ?>
                            <p> <?php echo $_GET['fail']; ?> </p>
                            <?php
                        } else if (isset($_GET['phone'])) {
                            ?>
                            <p> <?php echo $_GET['phone']; ?> </p>
                            <?php
                        } else if (isset($_GET['email'])) {
                            ?>
                            <p> <?php echo $_GET['email']; ?> </p>
                            <?php
                        } else if (isset($_GET['success'])) {
                            ?>
                            <p> <?php echo $_GET['success']; ?> </p>
                            <?php
                        } else {
                        ?>
                        <h3>Your account de-active due to one of following reasons</h3>
                        <ol>
                            <li>Inactive for more than 2 month</li>
                            <li>Too many complaints</li>
                            <li>Too many accidents or rugh driving</li>
                            <li>Not reach on time at work</li>
                        </ol>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="right">
                    <h3>Want to re-active your account?</h3>
                        <form action="inactiverequest.php" method="POST">
                            <input name="fn"  type="text" placeholder="First name">
                            <input name="ln"  type="text" placeholder="last name">
                            <p><?php if(isset($_GET['errormail'])) { echo $_GET['errormail']; }  ?></p>
                            <input name="mail"  type="text" placeholder="E-mail">
                            <input name="cnt"  type="text" placeholder="phone number">
                            <button type="submit" name="reactive">Request to reactive</button>
                        </form>
                    </div>
                    </div>
                </div>
        </div>
    </body>

</html>