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
	<h2>Contribute to FPGA Repo</h2>
	<form action="insert_data.php" method="post">
	  <label for="eda_tool">EDA Tool:</label><br>
	  <input type="text" id="eda_tool" name="eda_tool" maxlength="100" required><br>

	  <label for="eda_version">EDA Version:</label><br>
	  <input type="number" step="any" id="eda_version" name="eda_version" required><br>

	  <label for="ip">IP:</label><br>
	  <textarea id="ip" name="ip" rows="4" cols="50" maxlength="1500" required></textarea><br>

	  <label for="peripherals">Peripherals:</label><br>
	  <textarea id="peripherals" name="peripherals" rows="4" cols="50" maxlength="1500" required></textarea><br>

	  <label for="description">Description:</label><br>
	  <textarea id="description" name="description" rows="4" cols="50" maxlength="3000"></textarea><br>
	  
		<label for="entry_date">Entry Date:</label><br>
		<input type="date" id="entry_date" name="entry_date" value="<?php echo date('Y-m-d'); ?>" required><br>

	  <input type="submit" value="Submit">
	  <input type="reset" value="Reset">
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