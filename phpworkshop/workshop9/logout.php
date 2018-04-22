<?php 
$_SESSION["username"]=null;
echo $_SESSION["username"];
session_unset();
echo $_SESSION["username"];
session_destroy();
echo $_SESSION["username"];
?>

