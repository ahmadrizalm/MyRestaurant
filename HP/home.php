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
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                        <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li>
                        <a class="active-menu" href="index.php"> Homepage </a>
                    </li>
                    <li>
                        <a href="ui.php"> Menu Makan dan Minum </a>
                    </li>
                    <li>
                        <a href="tab-panel.php"> Tagihan </a>
                    </li>  	
                </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div align="center">
                            <img src="assets/img/filkom.png"><br>
                            Ini websiteku, mana websitemu?
                        </div>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                    <h3>Selamat datang di MyRestaurant,</h3>
                    <p>Website <b>MyRestaurant</b> ini dibuat untuk menyelesaikan tugas akhir Pemrograman Web yang dibimbing oleh Pak Mahendra Data, S.Kom., M.Kom. dan juga untuk menambah dan melatih skill coding terutama dalam pemrograman website. Mungkin masih banyak kekurangan atau kesalahan dalam website ini, diharap maklum karena kami masih <s>cupu</s> / <s>newbie</s> / pemula dalam pemrograman website. Namun kami telah berusaha sebaik mungkin dalam membuat website ini.</p>
                    Nama anggota kelompok:<br>
                    <table style="border-spacing:0">
                        <tr><td>Ahmad Rizal M</td><td>>></td><td>135150207111051</td></tr>
                        <tr><td>Brillian Aristyo R</td><td>>></td><td>135150200111124</td></tr>
                        <tr><td>Iman Aidil N</td><td>>></td><td>135150207111041</td></tr>
                        <tr><td>Muchibbuddin Abas</td><td>>></td><td>135150201111092</td></tr>
                    </table>
                    <p>Informatika - J<br>
                    Fakultas Ilmu Komputer<br>
                    Universitas Brawijaya</p>
                    <br><br><br><br>
                    <hr>
                    <div align="center"><b>DREAM TEAM</b></div>
                    <hr>
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">A.Rizal</p>
                    <p class="text-muted">135150207111051</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Brillian AR</p>
                    <p class="text-muted">135150200111124</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Iman AN</p>
                    <p class="text-muted">135150207111041</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">M.Abas</p>
                    <p class="text-muted">135150201111092</p>
                </div>
             </div>
		     </div>
			</div>
                </div>
                </div>   
                <!-- /. ROW  -->           
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
