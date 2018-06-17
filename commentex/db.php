<?php


$servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
$username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
$password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
$database = "bohat_post";

//Connection to database, we use OOP method of connection
$db = new mysqli($servername, $username, $password, $database);

//Returns true if there is NO connection
if(!$db){
	//Error Message
	die("Connection failed: " . $db->connect_error);
}