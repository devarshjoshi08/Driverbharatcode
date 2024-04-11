<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['emailadd'])) {
    header('location: ../index.php');
    alert("login first to access");
}

include 'php/conn.php';
$mail = $_SESSION['emailadd'];

$fatch = "SELECT * FROM drivers_db WHERE d_mail = '$mail' ";
$query = mysqli_query($conn, $fatch);
$run = mysqli_fetch_assoc($query);

$photo = $run['pic'];

$personal = "SELECT * FROM driverpersonal_db WHERE d_mail = '$mail' ";
$perquery = mysqli_query($conn, $personal);
$personalrun = mysqli_fetch_assoc($perquery);
$name = $personalrun['d_name'];
$phone = $personalrun['d_cnt'];
$licence = $personalrun['licence'];
$pancard = $personalrun['pancard'];
$adharcard = $personalrun['adharcard'];
$bankname = $personalrun['bank_name'];
$banknumber = $personalrun['account_no'];
$accountname = $personalrun['account_name'];
$joindate = $personalrun['join_date'];

?> 

<head>
    <title>Details</title>
    <link rel="stylesheet" href="css/view.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                        <button type="button" class="btn btn-outline-danger" onclick="edit()">Edit profile</button>
                        <a href="viewprofile.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Basic info</a>
                        <a href="profile.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                    </div>
                </div>
            </div>
            <!-- --- right --- -->
            <div class="col-7">
                <form action="php/updateprofile.php" method="POST">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
                        <input type="text" class="form-control" name="mail" value="<?php echo "$mail"?>" disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Phone number</span>
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo "$phone"?>" disabled aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Licence number</span>
                        <input type="text" class="form-control" name="licence" id="licence" value="<?php echo "$licence";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Pan number</span>
                        <input type="text" class="form-control" name="pan" id="pan" value="<?php echo "$pancard";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Adhar number</span>
                        <input type="text" class="form-control" name="adhar" id="adhar" value="<?php echo "$adharcard";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Bank name</span>
                        <input type="text" class="form-control" name="bn" id="bn" value="<?php echo "$bankname";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Account Name</span>
                        <input type="text" class="form-control" name="an" id="an" value="<?php echo "$accountname";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Account number</span>
                        <input type="text" class="form-control" name="anum" id="anum" value="<?php echo "$banknumber";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>
                                
                    <div class="col btns">
                        <button type="submit" name="pupdate" id="update" class="btn btn-danger">Submit</button>
                </form>
                </div>
            </div>
        </div>
</body>

<script>
    function edit() {
        document.getElementById('phone').disabled = "";
        document.getElementById('phone').style.border = "1px solid black";
        document.getElementById('an').disabled = "";
        document.getElementById('an').style.border = "1px solid black";
        document.getElementById('bn').disabled = "";
        document.getElementById('bn').style.border = "1px solid black";
        document.getElementById('anum').disabled = "";
        document.getElementById('anum').style.border = "1px solid black";
        document.getElementById('update').style.display = "Block";
    }
</script>
</body>

</html>