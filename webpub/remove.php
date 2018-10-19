<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articles";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "DROP database articles";

if (mysqli_query($conn, $sql)) {
    echo "data base dropped and system data uninstalled successfully";
} else {
    echo "Error deleting system: " . mysqli_error($conn);
}

mysqli_close($conn);
?>