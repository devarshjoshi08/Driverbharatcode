<!DOCTYPE html>
<html>
<?php
include ("conn.php");
$pid = $_GET['id'];
$oid = "SELECT * FROM payment_db WHERE p_id = $pid";
$oidrun= mysqli_query($conn, $oid);
$fatchquery = mysqli_fetch_array($oidrun);
$o_id= $fatchquery['o_id'];
$city= $fatchquery['city'];
$state= $fatchquery['state'];
session_start();
$_SESSION['uid'] = $pid;
?>
<head>
<title>Login</title>
        <link rel="stylesheet" href="../css/asign.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
        <body>
            <h1>Select Driver for booking</h1>
            <table id="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>Email address</td>
                        <td>Phone number</td>
                        <td>Address</td>
                        <td>City</td>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $citymatch = "SELECT * FROM drivers_db WHERE d_city = $city";
                        $run = mysqli_query($conn,$citymatch);
                        while ($row = mysqli_fetch_array($run) ){
                        $fatch = $row['ride'];
                        if ($fatch==1) {
                            
                        ?>
                        <tr>
                            <td>
                                <?= $row['d_id']; ?>
                            </td>
                            <td>
                                <?= $row['d_fn']; ?>
                            </td>
                            <td>
                                <?= $row['d_ln']; ?>
                            </td>
                            <td>
                                <?= $row['d_mail']; ?>
                            </td>
                            <td>
                                <?= $row['d_cnt']; ?>
                            </td>
                            <td>
                                <?= $row['d_add']; ?>
                            </td>
                            <td>
                               

                                <?php 
                                    $city=  $row['d_city'];
                                    $cityquery = "SELECT * FROM all_cities WHERE city_code = $city";
                                    $run = mysqli_query($conn , $cityquery);
                                    $fatch = mysqli_fetch_array($run);
                                    $city_name = $fatch['city_name'];
                                    echo $city_name;

                                    ?>
                            </td>
                            <td>
                                <button class="update" name="connect">
                                    <a href="assignconnection.php?id=<?php echo $row['d_id'];?>">Connect</a>
                                </button>
                            </td>
                        
                    <?php
                        }
                        else { ?>
                        <td>
                                <button class="update" name="connect">
                                    <a href="cancel.php?id=<?php echo $o_id; ?>">Reject</a>
                                </button>
                            </td>
                    <?php
                        }
                    }
                    ?>
                    </tr>
                </tbody>
            </table>


        </body>

</html>