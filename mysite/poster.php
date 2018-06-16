<?php
//if(!isset($_POST['username'] && !isset($_POST['comment']))){
    //header("Location: index.html");
//}
$username = $_POST['username'];
$comment =$_POST['comment'];
$date = date("Y-m-d");
$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';
echo $date;

//$sql = "INSERT INTO short_post (DATE, DATA) VALUES (".$date.",".$comment.")";
?>
