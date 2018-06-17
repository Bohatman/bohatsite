<meta charset="utf-8">
<?php
require 'bndb.php';
$username = $_POST['username'];
$comment =$_POST['comment'];
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d h:i:s");

$sql = "INSERT INTO short_post (DATE, DATA, USERNAME) 
VALUES ('".$date."',\"".$comment."\",\"".$username."\")";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

mysqli_close($link);
?>
