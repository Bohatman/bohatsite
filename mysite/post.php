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
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'ajax_more.php',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.postList').append(html);
            }
        });
    });
});
</script>
<body>

<?php 
require 'config.php';
$query = $link->query("SELECT * FROM short_post ORDER BY POSTID DESC LIMIT 2");
  while($row = $query->fetch_assoc()){ 
      $postID = $row['POSTID'];
      $content = $row['DATA'];
      $date = $row['DATE'];
      $username=$row['USERNAME'];
      echo '<div class="list_item">';
      echo '<div class="media border p-3">';
      echo '<div class="media-body">';
      echo '<h4>'.$username.'<small><i>Posted on '.$date.'</i></small></h4>';
      echo '<p>'.$data.'</p>';
      echo '</div>';
      echo '<img src=".\pic\img_avatar3.png" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:60px;">';
      echo '</div>';
      echo '<span id="'.$postID.'"class="show_more" title="Load more posts">Show more</span>';
      echo '<span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>';
      echo '</div>';
  }
?>

</body>
</html>