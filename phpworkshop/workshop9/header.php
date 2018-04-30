<head>
<head>
                <meta charset="UTF-8" \>    
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1024px-Circle-icons-dev.svg.png" /> 
<script>
        function gourl(){
                <?php 
                session_start();
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
                            
                            </button> <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-briefcase"></span> Workshop 6</a>
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