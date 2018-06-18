<!DOCTYPE html>
<html lang="en">
<head>
<title>Puttipong AKA. BOHAT</title>
<meta name="robots" content="noindex, nofollow" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./fonts/style.css" />
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
<div class="postList">
    <?php
    include 'config.php';
    $query = $link->query("SELECT * FROM short_post ORDER BY POSTID DESC LIMIT 3");
    
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
            $postID = $row['POSTID'];
            $content = $row['DATA']; 
            $date = $row['DATE'];
            $username=$row['USERNAME'];
    ?>
    <div class="list_item">
    <div class="media border p-3">
    <img src=".\pic\img_avatar3.png" alt="Avatar" class="mr-3 mt-3 rounded-circle" style="width:60px;">
    <div class="media-body">
    <h4><?php echo $username; ?><small><i> Posted on <?php echo $date; ?></i></small></h4>
    <p><?php echo $content; ?></p>
    </div>
</div>
  </div>
    <?php } ?>
    <div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
    <div align="right">
    <span id="<?php echo $postID; ?>" class="show_more" title="Load more posts"><button type="button" class="btn btn-outline-primary">Show more</button></span>
    <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
        </div>
    </div>
    <?php } ?>
</div>
</body>
</html>