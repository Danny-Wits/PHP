<?php 
$hostname="localhost";
$database="login_info";
$username="root";
$password="";

$connection=mysqli_connect($hostname,$username,$password,$database);
if (!$connection)die("Could Not connect");
?>