<?php

// configuration
include 'config.php';

$row = $_POST['row'];
$rowperpage = 3;

// selecting posts
$query = 'SELECT * FROM short_post limit '.$row.','.$rowperpage;
$result = mysqli_query($link,$query);

$html = '';

while($row = mysqli_fetch_array($result)){
    $id = $row['POSTID'];
    $title = $row['	USERNAME'];
    $content = $row['DATA'];
    $date = $row['DATE'];

    // Creating HTML structure
    $html .= '<div id="post_'.$id.'" class="post media border p-3">';
    $html .= '<img src=".\pic\img_avatar3.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">';
    $html .= '<div class="media-body">';
    $html .= '<h4>'.$title.'<small><i>Posted on '.$date.'</i></small></h4>';
    $html .= '<p>'.$content.'</p>';
    $html .= '</div></div>';

}

echo $html;
