<script>
    function logout(){
        <?php 
            session_destroy();
            ?>
            window.location.replace('index.php');
    }
</script>
<center>ออกจากระบบ
    <br>
    <button type="submit" class="btn btn-default" onlick="">Logout</button>
</center>
