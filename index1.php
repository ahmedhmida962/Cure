<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>تسجيل دخول المريض</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width , initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style2.css">
    <style>
        body {
            background: -webkit-linear-gradient(left, #006A51, #00B854);
            background-size: cover;
            font-family: 'IBM Plex Sans', sans-serif;
            color: white;
            font-weight: bold; /* Make text thicker */
        }
        h4, h6 {
            font-size: 24px; /* Adjust font size for headers */
        }
        .navbar-nav .nav-link {
            font-size: 18px; /* Adjust font size for navbar links */
            color: white !important; /* Make navbar links white */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-right: 40px;">
                    <a class="nav-link js-scroll-trigger" href="index.php">الصفحة الرئيسية</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#00B854;">
    <div class="row">
        <div class="col-md-7" style="padding-left: 180px;">
            <div style="-webkit-animation: mover 2s infinite alternate; animation: mover 1s infinite alternate;">
                
            </div>
            <div style="color: white;">
                <h4 style="padding-left: 90px;"> </h4>
            </div>
        </div>

        <div class="col-md-4" style="margin-top: 5%;right: 0.01%">
            <div class="card">
                <div class="card-body">
                    <center>
                        <i class="fa fa-hospital-o fa-3x" aria-hidden="true" style="color:#00B854"></i>
                        <br>
                        <h3 style="margin-top: 10%">تسجيل دخول المريض</h3><br>
                        <form class="form-group" method="POST" action="func.php">
                            <div class="row" style="margin-top: 10%">
                                <div class="col-md-4"><label>معرف البريد الإلكتروني: </label></div>
                                <div class="col-md-8"><input type="text" name="email" class="form-control" placeholder="أدخل معرف البريد الإلكتروني" required/></div><br><br>
                                <div class="col-md-4" style="margin-top: 8%"><label>كلمة المرور: </label></div>
                                <div class="col-md-8" style="margin-top: 8%"><input type="password" class="form-control" name="password2" placeholder="أدخل كلمة المرور" required/></div><br><br><br>
                            </div>
                            <div class="row">
                                <div class="col-md-4"  style="color: #00B854; padding-left: 10px;margin-top: 10%">
                                    <center><input type="submit" id="inputbtn" name="patsub" value="تسجيل الدخول" class="btn btn-primary"></center>
                                </div>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
