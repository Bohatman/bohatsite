<!DOCTYPE html>
<html lang="en">

<head>
  <title>กระดานสนทนา</title>
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
<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.show_more',function(){
        var ID = $(this).attr('id');
        $('.show_more').hide();
        $('.loding').show();
        $.ajax({
            type:'POST',
            url:'ajax_more.php',
            data:'id='+ID,
            success:function(html){
                $('#show_more_main'+ID).remove();
                $('.postList').append(html);
            }
        });
    });
});
</script>
<body>
  <!-- FACEBOOK START-->

  <!--FACEBOOK END-->
  <!-- เมนูด้านบน(start)-->
  <?php include 'nav.html';?>
  <!--เมนูด้านบน(end)-->
  <div class ="container" style="margin-top:60px;margin-bottom: 120px;">
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        <?php include 'poster.html' ?>
        </div>
        
        <!-- Modal footer -->
        
      </div>
    </div>
  </div>

  <!-- The Modal -->
  <a name="Bot"></a>
  <!--Buttom-->
  <div class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© 2018 - Site Built By BOHAT
        <a href="https://www.facebook.com/developers.e" target="_blank">FACEBOOK</a>
      </p>
    </div>
  </div>

</body>

</html>