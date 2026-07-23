<?php
$host="localhost";
$user="root";
$pass="";
$database="demo";
$con=mysqli_connect($host,$user,$pass,$database);
if ($con) {
	echo "";
}
else {
	echo "DB Not Connected";
}
?>