<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["name"];
}
$file = "upload/'$fname'.pdf";


if(unlink($file))
  {
  echo ("Deleted $file");
  }
else
  {
  echo ("Error deleting $file");
  }
?>