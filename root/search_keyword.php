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