<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php include_once 'includes/db.inc.php'; ?>
</head>
<body>
    <div>
        <img id="img2" src="images/team.png" width="750px" style="position: absolute; position: fixed; z-index: 1; margin-left: 50%; margin-top: 10vh;">
    </div>

    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 110px; margin-left: 60px; width: 400px;">
        <h3>About Us</h3>
    	<p class="lead"><b>Placement Management System</b> is an application mainly developed for the college to add and maintain companies 
        that are available for campus drive in their college. And to maintain the record of the students who have got selected for companies
        in the campus drive.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="includes/bootstrap/bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#about").addClass("active");
        
      });
    </script>
</body>
</html>