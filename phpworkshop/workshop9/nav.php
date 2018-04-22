<?php 
session_start();
?>
<script>
        function gourl(){
                <?php 
                        if(isset($_SESSION['Username'])){
                                unset($_SESSION['Username']);
                                header("Google.com");
                        }
                        else {
                                ?>
                                alert("Error");
                                <?php
                        }
                        ?>
        }
        </script>
<!-- เมนู !-->
                    <nav class="navbar navbar-default">
                            <div class="container">
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            
                            </button> <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-briefcase"></span> Workshop 6</a>
                            </div>
                            <div class="collapse navbar-collapse" id="collapse">
                            <ul class="nav navbar-nav">
                            <li><a onclick="gourl();">จัดการข้อมูล</a></li>
                            <li><a href="#">ช่วยเหลือ</a></li>
                            </ul>
                            </div>
                            </div>
                            </nav>
                            <!-- เมนู !-->