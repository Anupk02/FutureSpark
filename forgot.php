<!doctype html>
<html lang="en">
  <head>
    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="includes/bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php include_once 'includes/db.inc.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/addcomp.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Change Password</title>
  </head>
  <body>
    <div>
      <img id="img2" src="images/pass.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 50%;
       margin-top: 20vh;">
    </div>
    <img src="images/aboutbg.png" id="img1" style="position: fixed;">
    <?php include_once 'includes/nav.php'; ?>
    <div class="content">
        <br> <br> 
    <h1 align="center" style="margin-left: 50px;">Forgot Password?</h1> <br>
    <br><br>
    <div class="row justify-content-center">
    <form action="forgot.inc.php" autocomplete="off" method="POST">
			<input type="text" style="display: none;" autocomplete="false">

    <?php

    include_once 'includes/db.inc.php';

      ?>
    <div class="center">
      <div class="form-group ">
        <label>Enter Mail-ID</label>
        <input type="email" class="form-control" id="id" name="email" style="width: 270px;"> 
        </div>


      <button type="submit" class="btn" name="ehelp" style=" color: white;
									font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">Next</button>
    </div>
  </form>
</div>
</div>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
      $(document).ready(function() {
         $("#add").removeClass("active");
        $("#change").addClass("active");
        
      });
    </script>
  </body>
</html>

