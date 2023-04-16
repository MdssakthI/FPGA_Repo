<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "db_connect.php";



// Escape user inputs for security
// Get the form data
$eda_tool = $_POST['eda_tool'];
$eda_version = $_POST['eda_version'];
$ip = $_POST['ip'];
$peripherals = $_POST['peripherals'];
$description = $_POST['description'];
$entry_date = $_POST['entry_date'];

// Print the form data
echo "<p>EDA Tool: $eda_tool</p>";
echo "<p>EDA Version: $eda_version</p>";
echo "<p>IP: $ip</p>";
echo "<p>Peripherals: $peripherals</p>";
echo "<p>Description: $description</p>";
echo "<p>entry_date: $entry_date</p>";

// Prepare the SQL query
// Prepare the SQL query
$sql = "INSERT INTO `quartus_systems` ( `SystemID`.`EDA Tool`, `EDA Version`, `IP`, `Peripherals`, `Description`, `Entry Date`) VALUES ('4','$eda_tool', '$eda_version', '$ip', '$peripherals', '$description', '$entry_date')";
echo ".$sql.";

// Execute the query
if (mysqli_query($conn, $sql)) {
  echo "Data inserted successfully.";
} else {
  echo "Error inserting data: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
//Prepare the SQL query
// $sql = "INSERT INTO quartus_systems (EDA_Tool, EDA_Version, IP, Peripherals, Description) VALUES (?, ?, ?, ?, ?)";
// $stmt = mysqli_prepare($conn, $sql);
// mysqli_stmt_bind_param($stmt, "sdsss", $eda_tool, $eda_version, $ip, $peripherals, $description);

//Execute the query
// if (mysqli_stmt_execute($stmt)) {
  // echo "Data inserted successfully.";
// } else {
  // echo "Error inserting data: " . mysqli_error($conn);
// }

//Close the connection
// mysqli_stmt_close($stmt);
// mysqli_close($conn);

?>
