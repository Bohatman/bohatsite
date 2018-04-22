<script>
    function logout(){
        <?php 
            session_destroy();
            ?>
    }
</script>
<center>ออกจากระบบ
    <br>
    <button type="submit" class="btn btn-default" onlick="">Logout</button>
</center>
