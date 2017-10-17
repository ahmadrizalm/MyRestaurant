<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
	//redirect ke halaman login
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h5>MyRestaurant</h5></a> 
            </div>
        <!-- Tampilkan siapa yang melakukan login -->
        <div style="color: white; padding: 15px 5px 10px 20px; font-size: 14px;"> Anda Login Sebagai :
            <?php
                include "koneksi.php";
                $no = $_SESSION['user'];
                $sebagai=mysql_fetch_array(mysql_query("select * from user where nip='$no'"));
                $namanya=$sebagai['nama'];
                echo $no." (".$namanya.")";
            ?><br>
            <div align="right"><a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </div>
        <!-- Batas -->
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                        <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <ul class="nav" id="main-menu">
				    <li>
                        <a href="index.php"> Homepage </a>
                    </li>
                    <li>
                        <a href="ui.php"> Menu Makan dan Minum </a>
                    </li>
                    <li>
                        <a class="active-menu" href="tab-panel.php"> Tagihan </a>
                    </li>  	
                </ul>	
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h4> Tagihan Pelanggan </h4>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                                 
            <div class="row">
                <div class="col-md-7">
                    <form action="tampilkan_tagihan.php" method="post">
                    Nomor Nota : <input style="width:50%" type="number" name="nota"><br><br>
                    Nomor Meja :
                        <select style="width:50%" name="meja">
                            <option value="">Nomor Meja</option>
                            <option value="1">Meja 1</option>
                            <option value="2">Meja 2</option>
                            <option value="3">Meja 3</option>
                            <option value="4">Meja 4</option>
                            <option value="5">Meja 5</option>
                            <option value="6">Meja 6</option>
                            <option value="7">Meja 7</option>
                            <option value="8">Meja 8</option>
                            <option value="9">Meja 9</option>
                            <option value="10">Meja 10</option>
                        </select>
                    <br><br>
                        <div align="center">
                            <input style="width:50%" type="submit" name="tagihan" value="Lihat Tagihan">
                        </div>
                    </form>
                </div>
            </div>

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
