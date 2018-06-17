<!DOCTYPE html>
<html lang="en">
<head>
  <title>Puttipong AKA. BOHAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href=".\fonts\style.css" />
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>

<?php 

include 'bndb.php';
$sql = "SELECT * FROM short_post ORDER BY POSTID";
$result = $link->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="media border p-3">
  <img src=".\pic\img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
  <div class="media-body">
    <h4><?= $row['USERNAME']?> <small><i>Posted on <?= $row['DATE']?></i></small></h4>
    <p><?= $row['DATA']?></p>
  </div>
  
    </div>
    <?php
  }
} else {
  echo "0 results";
}
?>

</body>
</html>