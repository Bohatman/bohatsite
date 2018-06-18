<!DOCTYPE html>
<html lang="en">

<head>
    <title>Puttipong AKA. BOHAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fonts/style.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body>
      <!-- เมนูด้านบน(start)-->
<?php include 'nav.html';?>
  <!--เมนูด้านบน(end)-->
<div class="container" style="margin-top:60px;margin-bottom: 120px;">
    <div class = "row">
        <div class = "col-sm-3">
        <div class="card">
            <div class="card-header">PICTURE</div>
            <div class="card-body"><img class="card-img-top" src=".\pic\puttipong.jpg" alt="Puttipong" style="width:100%"></div> 
            <div class="card-footer">BIRTHDAY 06/25/1997</div>
</div>
        </div>
        <div class="col-sm-9">
        <div class="alert alert-success">
            <strong>ประกาศ: </strong>สามารถติดตามผมผ่าน Youtube <a href="https://www.youtube.com/channel/UC8DPEY4nCnJLetSerURxHtg" class="alert-link" target="_blank">คลิก!</a>.
            </div>
            <div class="border p-3">

               <br><h1>ข้อมูลทั่วไป</h1><hr><br>
<?php 
require 'config.php';
    $query = $link->query("SELECT * FROM infomation");
    $row = $query->fetch_assoc();
            $fname = $row['fname'];
            $lname = $row['lname'];
            $city = $row['city'];
            $sex = $row['sex'];
            $study = $row['study'];
            $tel = $row['tel'];
            $work = $row['work'];
            $AGE = $row['AGE'];
            $lang = $row['lang'];
            $skill = $row['skill'];
            ?>
    <form>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">NAME</span>
    </div>
    <input type="text" class="form-control" placeholder="<?php echo $fname." ".$lname;?>" readonly>
  </div>

    </form>
 </div></div></div>
        </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© 2018 - Site Built By BOHAT
        <a href="https://www.facebook.com/developers.e" target="_blank">FACEBOOK</a>
      </p>
    </div>
  </div>
</body>
</html>