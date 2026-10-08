<!DOCTYPE HTML>
<?php 
    require_once("settings.php");
    $con = mysqli_connect($host,$user,$pwd,$sql_db);
    if(! $con){
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM cars";
    $result = mysqli_query($con, $query);
    if($result){
        echo "<table> <th>Car ID</th>, <th>Make</th> <th>Model</th> <th>Price</th> <th>Year</th>";
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    }
    else{echo "unexpected problem";}
    mysqli_close($con);
?>