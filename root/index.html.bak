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
		<!-- <a href="about.html">About</a> -->
	</nav>
	<h2>
		v0.1 is live<br>
		Search and Insert Pages are working and connected to a working SQL database managed via myPHPadmin <br>
		When entering IP names, please use those as part of Intel Marketing. i.e Name as it appears in Quartus
		Will implement autocomplete into the input fields soon<br>
		Goal of this project is to :<br>
		- Provide IP utilization numbers for management to determine which IPs to prioritize in terms of LZ<br>
		- Gives customers a repository of working FPGA designs to refer to when creating their own<br>
		- In cases of debug, this tool validates the parts that have been paired together both software and hardware wise<br>
		<br>
		Any feedback or feature requests is best directed to my email : mohandas.sakthi.santhiran@intel.com<br>
	</h2>
	<div class="footer">
		<button class="btn" onclick="location.href='mailto:sakthi.mohandas@gmail.com'">Contact Us</button>
	</div>
</body>
</html>


<?php

include "db_connect.php";

//Test Function
//include "test_db_read.php";

//Search Function
//include "search_keyword.php";


// Close connection
mysqli_close($conn); 


?>

</html>