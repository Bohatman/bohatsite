<?php
if(!empty($_POST["id"])){

    // Include the database configuration file
    include 'config.php';
    
    // Count all records except already displayed
    $query = $link->query("SELECT COUNT(*) as num_rows FROM short_post WHERE POSTID < ".$_POST['id']." ORDER BY POSTID DESC");
    $row = $query->fetch_assoc();
    $totalRowCount = $row['num_rows'];
    
    $showLimit = 2;
    
    // Get records from the database
    $query = $link->query("SELECT * FROM short_post WHERE POSTID < ".$_POST['id']." ORDER BY POSTID DESC LIMIT $showLimit");

    if($query->num_rows > 0){ 
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
            echo '</div></div>';
    ?>
        
    <?php } ?>
    <?php if($totalRowCount > $showLimit){ ?>
        <div class="show_more_main" id="show_more_main<?php echo $postID; ?>">
            <span id="<?php echo $postID; ?>" class="show_more" title="Load more posts">Show more</span>
            <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
        </div>
    <?php } ?>
<?php
    }
}
?>