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
                    <form class= "form-horizontal" >
                        <div class="form-group">
                            <label for="txt_name" class="col-sm-2 control-label">ชื่อ :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="txt_name" placeholder="ชื่อ">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="txt_lastname" class="col-sm-2 control-label">นามสกุล :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="txt_lastname" placeholder="นามสกุล">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="txt_email" class="col-sm-2 control-label"> Email address</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="txt_email" placeholder="Email">
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                            <label><input type="checkbox"> Check me out</label>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                        </div>
                    </form>
                  


                    <!-- เครดิด!-->
                    <?php include "footer.php";?>
                    <!-- เครดิด!-->
                </body>
    </html>