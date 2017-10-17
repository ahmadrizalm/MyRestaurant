<?php
    include "otentik.php"; 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Free Responsive Admin Theme - ZONTAL</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1>MyRestaurant</h1>
                </a>

            </div>

            <div class="left-div">
                <i class="fa fa-user-plus login-icon" ></i>
        </div>
            </div>
        </div>
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Form Login MyRestaurant </h4>
                </div>
                <marquee>Hanya Chef yang bisa melakukan login!</marquee>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="login.php" method="post">
                    <label>Username : </label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username"/>
                    <label>Password :  </label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password"/>
                    <hr />
                    <input class="btn btn-info" style="width:100%" type="submit" name="submit" value="Masuk">
                    </form>
                </div>
                <br>
                <div class="col-md-6">
                    <div class="alert alert-info" align="center">
                        <img src="file/filkom.png"><br>
                        How can you see into my eyes, like open doors~
                    </div>
                    <div class="alert alert-success">
                        <h4 align="center"><b>Dream Team</b></h4>
                        <hr>
                        <div class="row">
                        <div class="col-md-6">
                            <a href="http://www.facebook.com/ahmadrizalm">
                                <img src="file/bar.png"><br>
                                Ahmad Rizal M<br>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="http://www.facebook.com/brillianarc">
                                <img src="file/bar.png"><br>
                                Brillian Aristyo R<br>
                            </a>    
                        </div>
                        <div class="col-md-6">
                            <a href="http://www.facebook.com/imandos88">
                                <img src="file/bar.png"><br>
                                Iman Aidil N<br>
                            </a>    
                        </div>
                        <div class="col-md-6">
                            <a href="http://www.facebook.com/muchibbuddin.abas">
                                <img src="file/abas.png"><br>
                                Muchibbuddin Abas<br>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
