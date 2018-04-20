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
                    <?php 
                        if(empty($_POST["txt_name"])){
                            $message ="กรุณากลับไปใส่ข้อมูลให้ครับก่อน";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            header('Location: /phpworkshop/workshop9/manage.php');
                        }
                        else{
                            $name= $_POST["txt_name"];
                            echo "$name";

                        }
                    ?>



                    <!-- เครดิด!-->
                    <?php include "footer.php";?>
                    <!-- เครดิด!-->
                </body>
    </html>