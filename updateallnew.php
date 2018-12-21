<?php

//$_GET["name"]


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

$sql = "UPDATE `usage` SET `appusage`=5000";
$result = $conn->query($sql);

if (!$result ) {
  echo "Update record failed: (" . $conn->errno . ") " . $conn->error;
} 
$conn->close();
?>
