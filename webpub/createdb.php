<?php
$servername="localhost";
$username="root";
$password="";
//make connection
$connect = mysqli_connect($servername,$username,$password);
//check connection
if(!$connect)
{
	die("connection failed : ".mysqli_connect_error());
}
echo"successfully connected to my sql........<br><br>";
//create database

$sql="create database articles";
if(mysqli_query($connect,$sql))
{
	echo"database named ' a r t c i l e s' created successfully.......<br><br>";
}
else
{
	echo"eror in creating data base : ".mysqli_error($connect);
}

$dbname = "articles";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// sql to create table
$sqle = "CREATE TABLE files(author varchar(10), 
details varchar(50),
file_name varchar(10), 
location varchar(10))";

if (mysqli_query($conn, $sqle)) {
    echo "Table 'files' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


mysqli_close($connect);
?>