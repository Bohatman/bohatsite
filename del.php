<<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="noindex, nofollow" />
</head>
<body>
<?php 
require 'config.php';
$postid = $_POST['id'];
$sql = "DELETE FROM short_post WHERE POSTID=".$postid;

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
?>
</body>
</html>