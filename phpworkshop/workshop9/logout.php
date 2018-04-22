<?php 
$_SESSION["username"]=null;
session_unset();
session_destroy();
?>
<script>
    window.location.replace('index.php');
</script>
