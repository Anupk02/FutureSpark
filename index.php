<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FutureSpark</title>
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php include_once 'includes/db.inc.php'; ?>
</head>
<body>

    <img src="images/homeback1.png" id="img1">
    <div style="position: absolute; margin-left:56%; margin-top:225px;">
    <img src="images/task.svg" width="430px" style="z-index: 1;">
    </div>
    	<?php include_once 'includes/nav.php' ?>
      <hr class="type_10" >
      <div class="part1" style="margin-top: 30px; margin-left: 20px;">
    <div class="content">
    	<h1 style="margin-left: 30px; font-size: 64px;"><b> </b><br> PLACEMENT <br><b> MANAGEMENT </b><br> SYSTEM</h1> <br>
    </div></div>
    
    <div id="users" style="z-index: 1; position: relative; margin-top: 600px; flex:display;">
    <hr class="type_10" >
            <h1 align="center"><u>USERS</u></h1> <br> <br>
            <a href="login.php" class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 50px; border-width: 2px; font-weight: bold;" id="loginnav">LOGIN</a>
        <div class="container">
        <div class="card-group">
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/admin1.svg" class="card-img-top" alt="..." style="width: 400px;">
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">Admin</a></h5>
              <p class="card-text"><small class="text-muted">Placement Officer</small></p>
            </div>
          </div>
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/student1.svg" class="card-img-top" alt="..." style="width: 410px; margin-top: 10px;"> <br> 
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">User</a></h5>
              <p class="card-text"><small class="text-muted">Student</small></p>
            </div>
          </div>
        </div>
        </div>
      </div>
      
      <div id="contact" style="z-index: 1; position: absolute; margin-left:2%; margin-top: 30vh;">
            <div class="form-row">
             <div class="form-group" style="margin-left:270px; margin-top: 200px;"> 
                <h1>Contact Us</h1>
                <p class="lead">&nbsp;<i class="fas fa-mobile"></i>&nbsp; (+91) 8999881962</p>
                <p class="lead">&nbsp;<i class="fas fa-at"></i>&nbsp; anup@gmail.com</p>
              </div>
              <div class="form-group" >
              <img src="images/contact.svg" alt="..." style="width: 600px; margin-left: 30%; margin-top: -25%;">
              </div>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="includes/bootstrap/bootstrap.min.js"></script>
</body>
</html>