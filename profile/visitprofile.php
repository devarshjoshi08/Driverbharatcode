<!DOCTYPE html>
<html>
    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: ../index.php');
        alert("login first to access");
    }
    include ('php/conn.php');
    include ('php/profiledata.php');
    ?>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/navbar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>
<body>
    <div class="banner">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../img/pnglogo.png" alt="" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link bdlink" aria-current="page" href="../home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../about us.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bdlink" href="../contact us.php">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profile/profile.php"><i class='bx bx-user-pin' ></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container w-50 h-75">
            <!-- --- left --- -->
            <div class="col-5 col-first">
                <div class="row">
                    <div class="col">
                        <div class="imgdiv"> 
                            <?php
                                if ($photo == '') {
                            ?>
                            <img id="profileimg" src="php/pictures/default.jpg">
                            <?php
                                } else {
                            ?>
                            <img id="profileimg" src="php/<?php echo $photo; ?>">
                            <?php
                                }
                            ?>    
                        </div>
                    </div>
                    <!-- <div class="col labeldiv">
                        <form method="POST" action="php/upload.php" enctype="multipart/form-data" id="form">
                            <div class="round">
                                <input type="file" id="image" name="image" accept=".jpg, .png, .jpeg">
                                <label for="image"><i class='bx bxs-camera'></i> Change Photo</label>
                            </div>
                        </form>
                    </div> -->
                    <div class="col">
                        <h1 class="col-name">
                            <?php echo "$fname $lname"; ?>
                        </h1>
                    </div>
                    <div class="col btns">
                        <button type="button" class="btn btn-outline-danger" onclick="edit()">Edit profile</button>
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
                                <input type="text" class="form-control" name="fn" id="fn" value="<?php echo "$fname"; ?>"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Last name</span>
                                <input type="text" class="form-control" name="ln" id="ln" value="<?php echo "$lname"; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                        <input type="text" class="form-control" name="mail" value="<?php echo "$mail" ?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Phone number</span>
                        <input type="text" class="form-control" name="phone" id="Phone" value="<?php echo "$phone"; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" disabled>
                    </div>
                    <?php if (isset($_GET['user'])) {?> <p id="error"><?php echo $_GET['user'];} ?> </p>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">City</span>
                                <input type="text" class="form-control" name="city" id="City" value="<?php echo "$cname"; ?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">State</span>
                                <input type="text" class="form-control" name="state" id="State" value="<?php echo "$sname"; ?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Gender</span>
                                <input type="text" class="form-control" name="gender" id="gender" value="<?php echo "$gender"; ?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Join date</span>
                                <input type="text" class="form-control" name="date" id="State" value="<?php echo "$date"; ?>" Readonly="on" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
                        <textarea name="add" class="form-control" value="<?php echo "$address"; ?>" placeholder="" id="floatingTextarea" disabled><?php echo "$address"; ?></textarea>
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

</html>