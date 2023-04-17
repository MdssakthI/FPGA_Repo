<html>
<head>
	<title>FPGA Systems Repo</title>
	<style>
		.banner {
			background-color: #0071C5;
			color: white;
			font-size: 36px;
			font-weight: bold;
			text-align: center;
			padding: 20px;
		}
		.footer {
			background-color: #333;
			color: white;
			text-align: center;
			padding: 10px;
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
		}
		.btn {
			background-color: #0071C5;
			color: white;
			padding: 10px 20px;
			border-radius: 5px;
			text-decoration: none;
			font-size: 16px;
			font-weight: bold;
			margin: 10px;
			cursor: pointer;
		}
		.btn:hover {
			background-color: #005EA4;
		}
		nav {
			background-color: #333;
			color: white;
			overflow: hidden;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 20px;
			font-weight: bold;
			text-align: center;
			padding: 05px;
		}
		nav a {
			color: white;
			padding: 14px 16px;
			text-decoration: none;
			margin: 0 10px;
		}
		nav a:hover {
			background-color: #0071C5;
			color: white;
		}
	</style>
</head>
<body>
	<div class="banner">
		FPGA Systems Repository
	</div>
	<nav>
		<a href="index.php">Home</a>
		<a href="search_page.php">Search</a>
		<a href="insert_page.php">Insert</a>
		<a href="about.html">About</a>
	</nav>
	<div class="footer">
		<button class="btn" onclick="location.href='mailto:sakthi.mohandas@gmail.com'">Contact Us</button>
	</div>
</body>
</html>

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
$sql = "INSERT INTO `quartus_systems` ( `SystemID`,`EDA Tool`, `EDA Version`, `IP`, `Peripherals`, `Description`, `Entry Date`) VALUES (NULL,'$eda_tool', '$eda_version', '$ip', '$peripherals', '$description', '$entry_date')";
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
