<?php
session_start();
    if (!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != ''))
    {
      header ("Location: index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<script type="text/javascript" src="timer.js"></script>-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        </head>
        <body onload="setCounter();" onmousemove="resetCounter();" onclick="resetCounter();" onkeypress="resetCounter();" onscroll="resetCounter();">
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
              <div class="container">
                    <div class="row">
                    <div class="col-sm-2">
                       <img src="logo.png">
                    </div>
                    <div class="col-sm-8 col-sm-offset-0 text">

                            <h1 class="header"><strong>FMCG Sales Company</strong></h1>
                            <!--<div class="description">
                                <p>
                                    This is a free responsive login form made with Bootstrap.
                                    Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                                </p>
                            </div>-->

                        </div>
                        </div>
                        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
             <br>
            <div class="row">
              <div>
              <center>
                <?php
                echo "<h4 style='color: white; font-size: 30px;'>Welcome</h4>" .$_SESSION['logged_in'];
                ?>
                </center>
              </div>
              <!--<div class="col-sm-2 col-sm-offset-8">
              <a href="logout.php" class="btn btn-primary">LOGOUT</a>
              </div>-->
            </div>
             <br>
             <br>
            <div class="row">
              <div class="col-sm-2 col-sm-offset-1">
                <button class="btn1" onclick="visitPage();" style="height: 120px;"><h1 style="color: white; font-size: 25px;">Create login id for<br> team leader</h1></button>
              </div>



              <div class="col-sm-2 col-sm-offset-5">
                <button class="btn1" onclick="visitPage2();" style="height: 120px;"><h1 style="color: white; font-size: 25px;">Report generation</h1></button>
              </div>

              <!--<div class="col-sm-3 col-sm-offset-1">
                <button class="btn1" style="height: 120px;"><h1 style="color: white; font-size: 25px;">View performance reports</h1></button>
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-sm-3 col-sm-offset-3">
                <button class="btn1" style="height: 120px;"><h1 style="color: white;font-size: 25px;">View performance reports</h1></button>
              </div>



              <div class="col-sm-3 col-sm-offset-1">
                <button class="btn1" style="height: 120px;"><h1 style="color: white;font-size: 25px;">Performance generation</h1></button>
              </div>
            </div>

              <br><br>-->

            </div>
            <br><br>
            <div class="row">

              <div class="col-sm-4 col-sm-offset-4">

              <a href="logout.php" class="btn btn-primary">LOGOUT</a>

              </div>

            </div>
            <script>
              function visitPage(){
              window.location='teamleadersignup.php';
              }
              function visitPage2(){
              window.location='f_report.php';
              }
</script>
          </div>