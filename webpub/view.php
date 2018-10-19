
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

$sql = "SELECT*FROM files";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><h1>articles and detailes</h1><br><table border='1'><tr><th>author</th><th>details</th><th>file name</th><th>location</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["author"]. "</td><td>" . $row["details"]. "</td><td>" . $row["file_name"]. " </td><td><a href=upload/" . $row["location"].".pdf target='_blank'>". $row["location"]. "</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?> 