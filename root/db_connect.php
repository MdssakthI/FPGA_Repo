<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "fpga_systems";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL : (" . $conn->connect_errno . ") " . $conn->connect_error;
}
//echo "Connected successfully" . "<br>"; 

?>