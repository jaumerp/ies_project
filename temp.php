<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "dbies";

/*if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection open at <b>",$servername, "</b> on DB <b>", $dbname, "</b>";
}

$sql = "SELECT id, firstname, lastname FROM usuaris";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>", "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>