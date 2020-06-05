<?php

include "../../setting/config.php";
include_once'../dbh.php';

session_start();
if(!$_SESSION['st_user'])
{
    
    header("location:../index.html");
}
else
{
    $st_username = $_SESSION['st_user'];
   
    $st_password = $_SESSION['st_password'];
    $st_name = $ravi->student_info_select($st_username);
    
    $student_name_display = $st_name->fetch_assoc();
    $st_id=$student_name_display['st_id'];
    $class_id=$student_name_display['class_id'];
    $st_name=$student_name_display['st_fullname'];
}
include("class/users.php");

$profile=new users;
//$profile->users_profile($username);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz System</title>
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div>
        <nav class="navbar navbar-light sticky-top navbar-expand-md navigation-clean-button bg-light">
            <div class="container"><a class="navbar-brand" href="index.php"><img class="img-responsive" src="assets/img/brand.svg" width="30px" height="30px"> Quiz System</a><a class="navbar-brand" href="../home.php"><?php echo $st_name ?></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    
                    <ul class=" navbar-nav ml-auto"><span class="navbar-text actions"> <a href="index.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span></div>
            </div>
        </nav>
    </div>
<!--Main Content Start--> 

<div class="container">
  <h2>&nbsp;</h2>
  <ul class="nav nav-tabs">
    <li class=" nav-item nav-link"><a data-toggle="tab" href="#" style="text-decoration: none;"> YOU HAVE MADE THREE ATTEMPT ALREADY, SORRY!</a></li>
   
    <li class=" nav-item nav-link ml-auto"><a  href="#" style="text-decoration: none;">CLICK ON YOUR NAME</a></li>
  </ul>


</div>


<!--Main Content End-->   



    <div class="container-fluid" style="background-color: #F8F9FA; display: block;">
        <hr>
        <div class="text-center center-block">
            <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook fa-2x fa-fw social"></i></a>
            <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter fa-2x fa-fw social"></i></a>
            <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus fa-fw fa-2x social"></i></a>
            <a href="mailto:hehehehe@gmail.com"><i id="social-em" class="fa fa-envelope fa-fw fa-2x social"></i></a>
        </div>
        </hr>
        <div class="footer-copyright text-center py-3">© 2018 Copyright</div>
    </div>
    
</body>

</html>