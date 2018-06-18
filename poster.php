<<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="noindex, nofollow" />
</head>
<body>
<?php
require 'config.php';
$username = $_POST['username'];
$comment =$_POST['comment'];
date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d h:i:s");

$sql = "INSERT INTO short_post (DATE, DATA, USERNAME) 
VALUES ('".$date."',\"".$comment."\",\"".$username."\")";

if ($link->query($sql) === TRUE) {
   header('Location: contact.php');
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

mysqli_close($link);
?>
    
    </body>
</html>
