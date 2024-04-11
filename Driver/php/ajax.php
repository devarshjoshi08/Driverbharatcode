<?php
include ('conn.php');
$state = $_GET["state"];


if ($state != "") {
    $res = mysqli_query($conn ,"SELECT * FROM all_cities WHERE state_code = $state");
    // echo '<select name="cityname">';
    echo "<option>Select city</option>";
    while($row = mysqli_fetch_array($res)) {
        ?>
        <option value="<?php echo $row['city_code'] ; ?>"><?php echo $row["city_name"] ; ?></option>
        <?php
    }
    // echo "</select>";
}

?>