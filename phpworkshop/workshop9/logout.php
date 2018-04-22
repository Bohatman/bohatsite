<?php 
$_SESSION["username"]=null;
echo $_SESSION["username"];
unset($_SESSION["username"]);
echo $_SESSION["username"];
session_destroy();
echo $_SESSION["username"];
?>

