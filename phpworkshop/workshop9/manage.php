<html>
        <head>
                <meta charset="UTF-8" \>    
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Circle-icons-dev.svg/1024px-Circle-icons-dev.svg.png" />
                <title>น้องก้อนมาแล้ว</title> 
                <script> $("#li1").attr("class", "active");</script>
            </head>
            <body>


                    <!-- เมนู!-->
                    <?php include "nav.php";?>
                    <!-- เมนู!-->
                    <form class= "form-horizontal" action= "result.php" method="post">
                        <div class="form-group">
                            <label for="txt_name" class="col-sm-2 control-label">ชื่อ :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="txt_name" placeholder="ชื่อ">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="txt_lastname" class="col-sm-2 control-label">นามสกุล     :</label>
                        <div class="col-sm-5">  
                            <input type="text" class="form-control" name="txt_lastname" placeholder="นามสกุล">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="txt_sex" class="col-sm-2 control-label"> เพศ :</label>
                            <label class="radio-inline"><input type="radio" name="sex" value="male">ชาย</label>
                            <label class="radio-inline"><input type="radio" name="sex" value="female">หญิง</label>
                        </div>
                        <div class="form-group">
                            <label for="txt_number" class="col-sm-2 control-label">เบอร์โทร:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="txt_number" placeholder="เบอร์โทร">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="txt_email" class="col-sm-2 control-label">e-Mail:</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" name="txt_email" placeholder="e-Mail">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="txt_event" class="col-sm-2 control-label">กิจกรรม:</label>
                            <div class="checkbox">
                                <div class="row col-sm-offset-2">
                            <label><input type="checkbox" name="event[]" value="อ่านหนังสือ">อ่านหนังสือ</label>
                            <label><input type="checkbox" name="event[]" value="ดูภาพยนตร์">ดูภาพยนตร์</label>
                            <label><input type="checkbox" value="music">ฟังเพลง</label>
                                </div>
                            <div class ="row col-sm-offset-2">
                            <label><input type="checkbox" name="event[]" value="เล่นกีฬา">เล่นกีฬา</label>
                            <label><input type="checkbox" name="event[]" value="ท่องเที่ยว">ท่องเที่ยว</label>
                            <label><input type="checkbox" name="event[]" value="หาความรู้เพิ่มเติม">หาความรู้เพิ่มเติม</label>
                                </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-download-alt"></span> บันทึก</button>
                        </div>
                        </div>
                    </form>
                  


                    <!-- เครดิด!-->
                    <?php include "footer.php";?>
                    <!-- เครดิด!-->
                </body>
    </html>