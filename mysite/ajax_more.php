<?php
if(!empty($_POST["id"])){

    // Include the database configuration file
    include 'config.php';
    
    // Count all records except already displayed
    $query = $link->query("SELECT COUNT(*) as num_rows FROM short_post WHERE POSTID < ".$_POST['id']." ORDER BY POSTID DESC");
    $row = $query->fetch_assoc();
    $totalRowCount = $row['num_rows'];
    
    $showLimit = 3;
    
    // Get records from the database
    $query = $link->query("SELECT * FROM short_post WHERE POSTID < ".$_POST['id']." ORDER BY POSTID DESC LIMIT $showLimit");

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
    <?php if($totalRowCount > $showLimit){ ?>
        <div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
    <div align="right">
    <span id="<?php echo $postID; ?>" class="show_more" title="Load more posts"><button type="button" class="btn btn-outline-primary">Show more</button></span>
    <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
        </div>
    </div>
    <?php } ?>
<?php
    }
}
?>