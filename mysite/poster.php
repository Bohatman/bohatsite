
<html>
<head>
  <title>Puttipong AKA. BOHAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./fonts/style.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
</body></html>
