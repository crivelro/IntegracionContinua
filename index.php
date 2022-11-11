<?php

//create connection

$conn= mysqli_connect("database:3306", "root", "123456789", "usuarios");

// check connection

if(!$conn){
	die("connection failed:".mysqli_connect_error());
}

echo "connected succesfully";

?>
