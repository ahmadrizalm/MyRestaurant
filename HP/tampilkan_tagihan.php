<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
	//redirect ke halaman login
	header('location:index.php');
}

include "koneksi.php";
$nota = $_POST['nota'];
$meja = $_POST['meja'];
                        
$query = mysql_query("select * from pesanan where id_nota=$nota && nomor_meja=$meja");
$tmp = mysql_fetch_array($query);
$tampung = $tmp['status_pemesanan'];
if($tampung==""){
    echo "<script> alert('Nomor Nota atau Nomor Meja tidak ada dalam database!'); location = 'tab-panel.php'; </script>";
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
				    <li>
                        <a href="index.php"> Homepage </a>
                    </li>
                    <li>
                        <a href="ui.php"> Menu Makan dan Minum </a>
                    </li>
                    <li>
                        <a class="active-menu" href="tab-panel.php"> Tagihan </a>
                    </li>
				    <li>
                        <a href="chart.php"> Morris Charts</a>
                    </li>	
                    <li>
                        <a href="table.php"> Table Examples</a>
                    </li>
                    <li>
                        <a href="form.php"> Forms </a>
                    </li>				           
                    <li>
                        <a href="#"> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                      </li>  
                    <li>
                        <a  href="blank.html"> Blank Page</a>
                    </li>	
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
                    <table>
                    <tr>
                        <th>Nomor Nota</th>
                        <th><?php echo $tmp['id_nota']; ?></th>
                    </tr>
                    <tr>
                        <th>Nomor Meja</th>
                        <th><?php echo $tmp['nomor_meja']; ?></th>
                    </tr>
                    <tr>
                        <th>Tanggal Pesan</th>
                        <th><?php echo $tmp['tanggal_pesan']; ?></th>
                    </tr>
                    </table>
                    <table>
                    <tr>
                        <th>Menu yang dipesan</th>
                        <th>Banyak yang dipesan</th>
                        <th>Jumlah Harga</th>
                        <th>Status</th>
                    </tr>
                    <?php
                        while($record=mysql_fetch_array($query)){
                        
                    ?>
                    <tr>
                        <td><?php echo $record['id_menu']; ?></td>
                        <td><?php echo $record['banyak']; ?></td>
                        <td><?php echo $record['total_harga']; ?></td>
                        <td><?php echo $record['status_pemesanan']; ?></td>
                    </tr>
                    
                    <?php
                        //berhentinya perulangan while
                        }
                    ?>
                    </table>
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
