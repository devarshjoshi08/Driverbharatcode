<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/insert.css">
    <title>Complaint reply</title>

    <?php 
    include ('../deletupdate/conn.php');

    $id = $_GET['id'];

    $fatch = "SELECT complaint FROM complaint_db WHERE cmp_id = $id";
    $fatchrun = mysqli_query($conn , $fatch);
    $fatchcode = mysqli_fetch_array($fatchrun);
    $cmp = $fatchcode['complaint'];
    if(isset($_POST['submit'])) {
        $cmt = $_POST['complaintreply'];

        $query = "UPDATE `complaint_db` SET `reply`='$cmt',`status`='1' WHERE cmp_id = $id";
        $run = mysqli_query($conn , $query);

        if ($run) {
            header('location: ../complaint.php');
        }
    }
    ?>
</head>
<body>
    <div class="banner">
        <h1>complaint reply</h1>
        <div class="form2 update">
            <form method="post" action="">
                <p>Complaint : <?php echo $cmp; ?></p>
                <input name="complaintreply" type="text" id="pass" placeholder="Reply">
                <button type="submit" name="submit">Submit</button>
                <button type="submit" name="submit"><a href="../complaint.php">Back</a></button>
            </form>
        </div>
    </div>
</body>
</html>