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
            $fname = $row['fname']; //c
            $lname = $row['lname']; //c
            $city = $row['city'];//c
            $sex = $row['sex'];//c
            $study = $row['study'];//c
            $tel = $row['tel'];//c
            $work = $row['work'];
            $AGE = $row['AGE'];//c
            $lang = $row['lang'];//c
            $skill = $row['skill'];
            ?>
    <form>
        <div class = "row">
        <div class="col-sm-5">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">NAME</span>
    </div>
    <input type="text" class="form-control" placeholder="<?php echo $fname." ".$lname;?>" readonly>
  </div>
</div>

<div class="col-sm-2">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">SEX</span>
    </div>
    <input type="text" class="form-control" placeholder="<?php echo $sex;?>" readonly>
  </div>
</div>

<div class="col-sm-2">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">AGE</span>
    </div>
    <input type="text" class="form-control" placeholder="<?php echo $AGE;?>" readonly>
  </div>
</div>

</div>

<div class = "row">

        <div class="col-sm-5">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">CITY</span>
    </div>
    <input type="text" class="form-control" placeholder="<?php echo $city;?>" readonly>
  </div>
</div>

</div>

<div class = "row">

<div class="col-sm-9">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">UNIVERSITY</span>
</div>
<input type="text" class="form-control" placeholder="<?php echo $study;?>" readonly>
</div>
</div>

</div>

<div class = "row">

<div class="col-sm-3">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">TEL.</span>
</div>
<input type="text" class="form-control" placeholder="<?php echo $tel;?>" readonly>
</div>
</div>

<div class="col-sm-5">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">LANGUAGE</span>
</div>
<input type="text" class="form-control" placeholder="<?php echo $lang;?>" readonly>
</div>
</div>

</div>

<div class = "row">

<div class="col-sm-3">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">WORK</span>
</div>
<input type="text" class="form-control" placeholder="<?php echo $work;?>" readonly>
</div>
</div>

<div class="col-sm-5">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">SKILL</span>
</div>
<input type="text" class="form-control" placeholder="<?php echo $skill;?>" readonly>
</div>
</div>

</div>

<div class = "row">
<div class = "col-sm-12">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=".\pic\azurebootcamp.jpg" alt="Los Angeles" width="100%" height="50%">
      <div class="carousel-caption">
        <h3>บริษัท ไมโครซอฟท์ (ประเทศไทย) จำกัด</h3>
        <p>กิจกรรมเกี่ยวกับการใช้งาน Microsoft Azure</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src=".\pic\azuregekk.jpg" alt="Chicago" width="100%" height="50%">
      <div class="carousel-caption">
        <h3>Chulalongkorn University</h3>
        <p>การแข่งขัน Hackathon</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src=".\pic\parallax.jpg" alt="New York" width="100%" height="50%">
      <div class="carousel-caption">
        <h3>King Mongkut's University of Technology North Bangkok</h3>
        <p>อบรมการสร้างเว็บไซต์แบบ Parallax</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
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