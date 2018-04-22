<head>
<script>
        function gourl(){
                <?php 
                        if($_SESSION["username"]=="admin"){
                              //header("Location: manage.php");
                              ?> 
                              $("#li1").attr("class", "active");
                            window.location.replace('manage.php');
                              <?php 
                        }
                        else {
                                ?>
                               alert("กรุณาเข้าสู่ระบบ");
                                <?php
                        }
                        ?>
        }
        var url =window.location.pathname;
        if(url.search("manage") >= 0){
                $("#li1").attr("class", "active");
        }
        </script>
        </head>
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
                            <li id="li1" onclick="gourl();"><a >จัดการข้อมูล</a></li>
                            <li><a href="#">ช่วยเหลือ</a></li>
                            </ul>
                            </div>
                            </div>
                            </nav>
                            <!-- เมนู !-->