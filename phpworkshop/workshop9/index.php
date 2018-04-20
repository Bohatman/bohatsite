<html>
        <head>
                <meta charset="UTF-8" \>    
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1024px-Circle-icons-dev.svg.png" />
                <title>น้องก้อนมาแล้ว</title>  
            </head>
            <body>
                    <!-- เมนู!-->
                    <?php include "nav.html";?>
                    <!-- เมนู!-->
                        <div>
                                <?php   
                                        if(!empty($_POST["txt_username"])&&!empty($_POST["txt_password"])){
                                                $username = $_POST["txt_username"];
                                                if($username== "admin"&& $_POST["txt_password"] == "enet"){
                                                        echo "<div class=\"form-group\">"
                                                        echo "<div class=\"col-sm-offset-2 col-sm-5\">"
                                                        echo "<div class=\"alert alert-danger\">";
                                                        echo "Username และ/หรือ Password ไม่ถูกต้อง</div>";
                                                        echo "</div></div>"
                                                }

                                        }
                                ?>
                        </div>
                        <form class= "form-horizontal" action="" method="post">
                                <div class="form-group">
                                        <label for="txt_username" class="col-sm-2 control-label"> Username:</label>
                                <div class="col-sm-5">
                                        <input type="text" class="form-control" name="txt_username" placeholder="Username">
                                </div>
                                </div>
                        <div class="form-group">
                                <label for="txt_password" class="col-sm-2 control-label"> Password:</label>
                        <div class="col-sm-5">
                                <input type="password" class="form-control" name="txt_password" placeholder="Password">
                        </div>
                        </div>
                        <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Login</button>
                        </div>
                        </div>
                        </form>


                    <!-- เครดิด!-->
                    <?php include "footer.php";?>
                    <!-- เครดิด!-->
                </body>
    </html>