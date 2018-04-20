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
                            header('Location: /phpworkshop/workshop9/manage.php');
                        }
                        else{
                            $name= $_POST["txt_name"];
                            $sex= $_POST["sex"];
                            
                            if($_POST["sex"]=="male"){
                                $name="นาย".$name;
                            }
                            else{
                                $name="นาง".$name;
                            }
                            
                           $number=$_POST["txt_number"];
                            $name = $name." ".$_POST["txt_lastname"];
                            echo "<center><font color=\"gray\">";
                            echo "$name"."<br>";
                            echo "เบอร์มือถือ".$_POST["txt_number"]."e-Mail:".$_POST["txt_email"]."<br>";
                            echo "กิจกรรมที่ชอบคือ";
                            $c= count($_POST["event"]);
                            for($i=0;$i<$c;$i++){
                                if($i==$c-1){
                                echo $_POST["event"][$i];}
                                else{
                                echo $_POST["event"][$i].",";}
                            }
                            echo "</font></center>";

                        }
                    ?>



                    <!-- เครดิด!-->
                    <?php include "footer.php";?>
                    <!-- เครดิด!-->
                </body>
    </html>