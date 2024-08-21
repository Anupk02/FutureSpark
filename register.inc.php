<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<?php include_once 'includes/db.inc.php'; ?>
    <style>
        #loginnav {
            border-color: black;
            color: black;
            transition: 0.5s ease;
        }
        #loginnav:hover {
            border-color: black;
            background-color: black;
            color: white;
            transition: 0.5s ease;
        }
    </style>
</head>
<body>
    <?php 
            include_once 'includes/db.inc.php';
            if (isset($_POST['signup'])) {
                $uname = $_POST['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['mailid'];
                $phone = $_POST['phone'];
                $pwd1 = $_POST['pwd1'];
                $pwd2 = $_POST['pwd2'];
                $secque = $_POST['secque'];
                $secans = $_POST['secans'];
                if ($pwd1 == $pwd2) {
                    $sql = "insert into studentlogin(uname, pwd, fname, lname, email, phone, secque, secans) values('$uname', '$pwd1', '$fname', '$lname', '$email', '$phone', '$secque', '$secans');";
                    mysqli_query($conn, $sql);
                    ?>           
                <img src="images/success2.png" id="img1" style="position: fixed; margin-top: 140px;" width="500px">
                    <?php include_once 'includes/nav.php' ?>
                <div class="container" style="margin-top: 130px; margin-left: 270px;">
                    <h1 align="center" style="margin-left: 60px;">SignUp Successful!</h1> <br>
                    <div class="alert alert-success" role="alert" style="width: 600px; margin-left: 300px;">
                      <h4 class="alert-heading">Well done!</h4>
                      <p>You have successfully registered your account!</p>
                      <hr>
                      <p class="mb-0"><b> <a href="login.php"> Login</a></b> to explore more.</p>
                    </div>
                </div>
                    <?php
                } else {
            ?>
        <img src="images/404b.png" id="img1" style="position: fixed; margin-top: 140px;" width="500px">
                    <?php include_once 'includes/nav.php' ?>
                <div class="container" style="margin-top: 130px; margin-left: 270px;">
                    <h1 align="center" style="margin-left: 60px;">SignUp Faied!</h1> <br>
                    <div class="alert alert-danger" role="alert" style="width: 600px; margin-left: 300px;">
                      <h4 class="alert-heading">Try Again!</h4>
                      <p>There was an error, please fill the fields correctly and signup!</p>
                      <hr>
                      <a href="register.php" class="alert-link"><b>Get back to register</a>
                    </div>
                </div>
                <?php
            }
            } 
        ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="includes/bootstrap/bootstrap.min.js"></script>

</body>
</html>