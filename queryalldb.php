<?php
$servername = 'sql3.freemysqlhosting.net';
$username = 'sql3268527';
$password = 'BzCdb4UpY9';
$dbname = 'sql3268527';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, appkey, appsecret, appusage,dmt FROM `usage`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "appkey: " . $row["appkey"]. " - appsecret: " . $row["appsecret"]. " " . $row["appusage"]. " ". $row["email"]."  ".$row["dmt"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

			
