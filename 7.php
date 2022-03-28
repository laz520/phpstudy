<?php
$servername = "localhost";
$username = "root";
$password = "root";




$result = mysqli_query($con, "SELECT * FROM xxx
WHERE FirstName='Peter'");

while ($row = mysqli_fetch_array($result)) {
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br>";
}

?>