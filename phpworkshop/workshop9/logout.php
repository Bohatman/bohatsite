<?php 
if(!empty($_POST("logoutbutton"))){
session_destroy();
header("Location: index.php");}
?>