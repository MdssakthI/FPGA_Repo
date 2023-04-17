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
		<a href="index.html">Home</a>
		<a href="search_page.php">Search</a>
		<a href="insert_page.php">Insert</a>
		<!-- <a href="about.html">About</a> -->
	</nav>
	<div class="footer">
		<button class="btn" onclick="location.href='mailto:sakthi.mohandas@gmail.com'">Contact Us</button>
	</div>
</body>
</html>


<?php

include "db_connect.php";

?>

<html>
	<h2>Search FPGA Systems</h2>
	<form action="search_keyword.php" method="get">
		<label for="search-column">Search by:</label>
		<select id="search-column" name="search-column">
			<option value="IP">IP</option>
			<option value="Peripherals">Peripherals</option>
			<option value="Description">Description</option>
		</select>
		<label for="search-term">Search term:</label>
		<input type="text" id="search-term" name="search-term">
		<input type="submit" value="Search">
	</form>
	

</html>

<?php
//Test Function
//include "test_db_read.php";

//Search Function
//include "search_keyword.php";

// Close connection
mysqli_close($conn); 
?>

</html>