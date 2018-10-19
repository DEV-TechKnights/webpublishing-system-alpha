<?php
 define ("filesplace","./upload");

 if (is_uploaded_file($_FILES['article']['tmp_name'])) {

 if ($_FILES['article']['type'] != "application/pdf") {
 echo "<p>article must be uploaded in PDF format.</p>";
 }
 else{
 $name = $_POST['name'];
 $result = move_uploaded_file($_FILES['article']['tmp_name'], filesplace."/$name.pdf");
 if ($result == 1) echo "<p>Upload done .</p>";
 else echo "<p>Sorry, Error happened while uploading . </p>";
} #endIF
 } #endIF
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["name"];
  $author = $_POST["aname"];
  $details = $_POST["detail"];
}


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
$sql = "INSERT INTO files (author, details, file_name, location) 
VALUES ('$author', '$details','$name','$fname')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>