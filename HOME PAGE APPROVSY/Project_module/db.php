<?php


define("DB_SERVER", "localhost:3307");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "minor");


$mysqli = new mysqli("127.0.0.1:3307", "root", "", "minor");
if($mysqli->connect_error)
{
	die("connection failed :" .$mysqli->connect_error);
}
else{
	return $mysqli;
}

?>