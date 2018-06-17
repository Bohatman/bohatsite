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
  <link href="style.css" type="text/css" rel="stylesheet">
  <script src="script/loadmore.js"></script>
</head>
<body>
<div class="container">

<?php

$rowperpage = 1;

// counting total number of posts
$allcount_query = "SELECT count(*) as allcount FROM short_post";
$allcount_result = mysqli_query($link,$allcount_query);
$allcount_fetch = mysqli_fetch_array($allcount_result);
$allcount = $allcount_fetch['allcount'];

// select first 3 posts
$query = "select * from short_post order by id asc limit 0,$rowperpage ";
$result = $link->query($query);

while($row = $result->fetch_assoc()){

  $id = $row['POSTID'];
  $title = $row['	USERNAME'];
  $content = $row['DATA'];
  $date = $row['DATE'];
  echo '<div id="post_'.$id.'" class="media border p-3">';
  echo '<img src=".\pic\img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">';
  echo '<div class="media-body">';
  echo '<h4>'.$title.'<small><i>Posted on '.$date.'</i></small></h4>';
  echo '<p>'.$content.'</p>';
  echo '</div></div>';
}
?>

<h1 class="load-more">Load More</h1>
<input type="hidden" id="row" value="0">
<input type="hidden" id="all" value="<?php echo $allcount; ?>">

</div>
</body>
</html>