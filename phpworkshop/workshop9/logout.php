<?php 
    $_SESSION["username"]="error";
    session_destroy();
    header("Location: index.php");
?>