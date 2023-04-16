<?php

// Run SELECT statement
$sql = "SELECT SystemID, `EDA Tool`, `EDA Version`, IP, Peripherals, Description, `Entry Date` FROM quartus_systems";
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