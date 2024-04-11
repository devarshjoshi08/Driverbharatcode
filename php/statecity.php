<!DOCTYPE html>
<html lang="en">
    <?php
    include('conn.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State city</title>
</head>
<body>

<form name="form1" action="" method="POST">
    <table>
        <tr>
            <td>Select country</td>
            <td>
                <select onChange="state()" id="statedd">
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
            </td>
        </tr>
        <tr>
            <td>Select State</td>
            <td>
            <div id="city">
                <select>
                    <option value="">Select city</option>
                </select>
            </div>
            </td>
        </tr>
    </table>

</form>
    

<script type="text/javascript">

function state() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","ajax.php?state="+document.getElementById("statedd").value,false);
    xmlhttp.send(null);
    document.getElementById("city").innerHTML = xmlhttp.responseText;

}
</script>


</body>
</html>