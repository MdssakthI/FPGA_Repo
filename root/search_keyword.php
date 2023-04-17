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

include "db_connect.php";



$searchterm = $_GET["search-term"];
$searchcolumn = $_GET["search-column"];

// Run SELECT statement
echo "<h2> Showing all the FPGA systems using the IP :  ". $searchterm ." </h2>";
$sql = "SELECT SystemID, `EDA Tool`, `EDA Version`, IP, Peripherals, Description, `Entry Date` FROM quartus_systems WHERE ".$searchcolumn." LIKE '%" . $searchterm. "%'";
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "SystemID: " . $row["SystemID"]. " - EDA Tool: " . $row["EDA Tool"]. " - EDA Version: " . $row["EDA Version"]. " - IP: " . $row["IP"]. " - Peripherals: " . $row["Peripherals"]. " - Description: " . $row["Description"]. " - Entry Date: " . $row["Entry Date"]. "<br>";
    }
} else {
    echo "No results found.";
}

?>