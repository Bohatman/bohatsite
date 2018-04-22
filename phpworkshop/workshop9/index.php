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
                    <?php include "nav.php";?>
                    <!-- เมนู!-->

                        <div>
                                <?php   
                                if(!isset($_SESSION["username"])){
                                        if(!empty($_POST["txt_username"])&&!empty($_POST["txt_password"])){
                                                $username = $_POST["txt_username"];
                                                if(!($username== "admin"&& $_POST["txt_password"] == "enet")){
                                                        echo "<div class=\"row\">";
                                                        echo "<div class=\"alert alert-danger col-sm-offset-2 col-sm-5\">";
                                                        echo "Username และ/หรือ Password ไม่ถูกต้อง</div></div>";
                                                        include "login.html"; 
                                                }
                                                else {
                                                        session_start();
                                                        $_SESSION["username"] = "admin";   
                                                        include "slogin.php";      
                                                }

                                        }
                                        else{
                                                include "login.html"; 
                                        }
                                }
                                else {
                                        include "slogin.php";           

                                }
                                ?>
                                </div>
                          


                    <!-- เครดิด!-->
                    <?php include "footer.php";?>
                    <!-- เครดิด!-->
                </body>
    </html>