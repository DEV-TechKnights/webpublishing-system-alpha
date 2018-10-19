
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sname = $_POST["search"];
}
$sql = "SELECT location FROM files where file_name like '%$sname%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><h1>result related to search as fallows</h1><br><table border='1'><tr><th>location</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><a href=upload/" . $row["location"].".pdf target='_blank'>". $row["location"]. "</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "try another search";
}


$conn->close();
?> 