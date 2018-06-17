<meta charset="utf-8">
<?php
include 'bndb.php';

$sql = "INSERT INTO short_post (DATE, DATA, USERNAME) 
VALUES ('".$date."',\"".$comment."\",\"".$username."\")";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

mysqli_close($link);
?>
