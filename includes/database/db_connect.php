<?php


$host_name = "localhost";
$username = "root";
$database = "farmhouse";
$password = "";

$conn=mysqli_connect("$host_name","$username","$password", "farmhouse");

// Check connection
if (!$conn)
 {
  die("Failed to connect to Database : " . mysqli_connect_error());
 }

  
// Change database to "test"
mysqli_select_db($conn,"farmhouse");
?>








