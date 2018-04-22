<?php 
if(!empty($_POST("logoutbutton"))){
session_destroy();
?>
<script>
    window.location.replace('manage.php');
</script>