<!DOCTYPE html>
<html>
    <?php
    session_start();
    if (!isset($_SESSION['emailadd'])) {
        header('location: ../index.php');
        alert("login first to access");
    }
    include ('php/conn.php');
    $mail = $_SESSION['emailadd'];
    $fatch = "select * from drivers_db where d_mail = '$mail' ";
    $query = mysqli_query($conn , $fatch);
    $run = mysqli_fetch_assoc($query);

    $id = $run['d_id'];
    $fname = $run['d_fn'];
    $lname = $run['d_ln'];
    $photo = $run['pic'];
    ?>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/changepass.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>
<body>
    <div class="banner">
        <div class="container w-50 h-75">
            <!-- --- left --- -->
            <div class="col-5 col-first">
                <div class="row">
                    <div class="col">
                    <div class="imgdiv"> 
                            <?php 
                                if ($photo == '') {
                            ?>
                            <img id="profileimg" src="pictures/default.jpg">
                            <?php
                            } else {
                            ?>
                            <img id="profileimg" src="<?php echo $photo; ?>">
                            <?php
                            }
                            ?> 
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="col-name">
                            <?php echo "$fname $lname"; ?>
                        </h1>
                    </div>
                    <div class="col btns">
                        <button type="button" class="btn btn-outline-danger" onclick="chhangepass()">Change password</button>
                        <a href="profile.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                    </div>
                </div>
            </div>
            <!-- --- right --- -->
            <div class="col-7">
                <form action="php/pass.php" method="POST">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bxs-lock'></i></span>
                        <input type="password" class="form-control" name="cp" id="current" placeholder="Current password" value="" disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <?php if (isset($_GET['unmatch'])) {?> <p id="error"><?php echo $_GET['unmatch'];} ?> </p>
                    <?php if(!isset($_GET['match'])) { ?>
                        <div class="col btns">
                            <button type="submit" name="check" id="check" class="btn btn-danger">Check password</button>
                        </div>
                    <?php if (isset($_GET['update'])) {?> <p id="error"><?php echo $_GET['update'];} ?> </p>
                    <?php if (isset($_GET['fail'])) {?> <p id="error"><?php echo $_GET['fail'];} ?> </p>
                    <?php } ?>
                </form>
                <?php if(isset($_GET['match'])) { ?>
                    <p><?php echo $_GET['match']; ?> </p>
                <form action="php/pass.php" method="POST" onsubmit="return newpass()" >
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bxs-lock'></i></span>
                        <input type="text" class="form-control" name="np" id="np" placeholder="New password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm"><i class='bx bxs-lock'></i></span>
                        <input type="text" class="form-control" name="ncp" id="ncp" placeholder="Confirm New password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="col btns">
                        <button type="submit" name="update" class="btn btn-danger">Change password</button>
                    </div>
                    <p id="error"></p>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

<script>
    function chhangepass() {
            document.getElementById('current').disabled = "";
            document.getElementById('current').style.border = "1px solid black";
            document.getElementById('update').style.display = "Block";
        }
    function newpass() {

        var password = document.getElementById("np").value;
        var confirmPassword = document.getElementById("ncp").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        } else {
            return true;
        }
    }
</script>

</html>