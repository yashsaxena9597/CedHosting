<?php
$dbServer= "localhost";
$dbUser ="root";
$dbPassword="";
$database="Cedhosting";
$conn= mysqli_connect($dbServer,$dbUser,$dbPassword,$database)or die('Mysql Connection Error:'.mysqli_connect_error()); 
?>