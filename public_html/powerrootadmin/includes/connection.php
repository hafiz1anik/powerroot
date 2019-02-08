<?php
$server = "mysql";
$username = "root";
$password = "some_password";
$db       = "contact";
//create connection
$conn = mysqli_connect($server,$username,$password,$db);

//check connection

if(!$conn){
  die('database is not connected:'.mysqli_connect_error());
}

//echo "connection successful";

?>