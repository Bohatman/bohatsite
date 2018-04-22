<script>
    function logout(){
            <?php 
            session_unset();
            header("Location: index.php");
            ?>
    }
</script>
<center>ออกจากระบบ
    <br>
    <button type="submit" class="btn btn-default" onlick="">Logout</button>
</center>
