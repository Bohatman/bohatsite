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
  <link rel="stylesheet" href=".\fonts\style.css" />
</head>
<body>
        <!-- เมนูด้านบน(start)-->   
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <a class="navbar-brand" href="index.html">BOHAT</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="contact.html">ติดต่อ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
              </li>
            </ul>
          </div>
        </nav>
        <!--เมนูด้านบน(end)-->
        <div class ="container" style="margin-top:60px ;">
            <div class="border p-3">
              <div class="jumbotron">
                <center><h1>Let's Talk</h1>
                <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">CLICK HERE !</button></p> </center>
              </div>
              <?php include 'post.php';?>
                
            </div>
        </div>

    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php include 'poster.html';?>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    </body>
        </html>