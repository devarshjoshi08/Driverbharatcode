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

$id = $run['d_id'];
$fname = $run['d_fn'];
$lname = $run['d_ln'];
$phone = $run['d_cnt'];
$gender = $run['d_gender'];
$address = $run['d_add'];
$state = $run['d_state'];
$cit = $run['d_city'];
$adharcard = $run['d_adharcard'];
$pancard = $run['d_pancard'];
$ride = $run['ride'];
$photo = $run['pic'];

$personal = "SELECT * FROM driverpersonal_db WHERE d_mail = '$mail' ";
$perquery = mysqli_query($conn, $personal);
$personalrun = mysqli_fetch_assoc($perquery);
$bankname = $personalrun['bank_name'];
$banknumber = $personalrun['account_no'];
$accountname = $personalrun['account_name'];
$licence = $personalrun['licence'];
$joindate = $personalrun['join_date'];

$ct = "SELECT * FROM all_cities WHERE city_code = '$cit' ";
$ctquery = mysqli_query($conn, $ct);
$ctrun = mysqli_fetch_assoc($ctquery);
$city = $ctrun['city_name'];

$st = "SELECT * FROM state_list WHERE id = '$state' ";
$stquery = mysqli_query($conn, $st);
$strun = mysqli_fetch_assoc($stquery);
$state = $strun['state'];
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
                        <a href="personal info.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Personal info</a>
                        <a href="profile.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Back</a>
                    </div>
                </div>
            </div>
            <!-- --- right --- -->
            <div class="col-7">
                <form action="php/updateprofile.php" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">First name</span>
                                <input type="text" class="form-control" name="fn" id="fn" value="<?php echo "$fname";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3"> 
                                <span class="input-group-text" id="inputGroup-sizing-sm">Last name</span>
                                <input type="text" class="form-control" name="ln" id="ln" value="<?php echo "$lname";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                        <input type="text" class="form-control" name="mail" value="<?php echo "$mail"?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Phone number</span>
                        <input type="text" class="form-control" name="phone" id="Phone" value="<?php echo "$phone";?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>
                    <?php if (isset($_GET['user'])) {?>
                    <p id="error">
                        <?php echo $_GET['user'];} ?> </p>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">City</span>
                                <input type="text" class="form-control" name="city" id="City" value="<?php echo " $city";?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">State</span>
                                <input type="text" class="form-control" name="state" id="State" value="<?php echo " $state "; ?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Gender</span>
                                <input type="text" class="form-control" name="gender" id="gender" value="<?php echo " $gender";?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Join date</span>
                                <input type="text" class="form-control" name="date" id="State" value="<?php echo " $joindate";?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
                        <textarea name="add" class="form-control" value="<?php echo " $address "; ?>" placeholder="" id="floatingTextarea" disabled><?php echo "$address"; ?></textarea>
                    </div>
                    <div class="col btns">
                        <button type="submit" name="update" id="update" class="btn btn-danger">Submit</button>
                </form>
                </div>
            </div>
        </div>
</body>

<script>
    function edit() {
        document.getElementById('fn').disabled = "";
        document.getElementById('fn').style.border = "1px solid black";
        document.getElementById('ln').disabled = "";
        document.getElementById('ln').style.border = "1px solid black";
        document.getElementById('Phone').disabled = "";
        document.getElementById('Phone').style.border = "1px solid black";
        document.getElementById('floatingTextarea').disabled = "";
        document.getElementById('floatingTextarea').style.border = "1px solid black";
        document.getElementById('update').style.display = "Block";
    }
</script>
</body>

</html>