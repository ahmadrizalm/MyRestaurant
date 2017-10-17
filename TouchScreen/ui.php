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
                <a class="navbar-brand" href="home.php">
                    <h1>MyRestaurant</h1>
                </a>
            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>

                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="home.php">Dashboard</a></li>
                            <li><a class="menu-top-active" href="ui.php">Menu Siap</a></li>
                            <li><a>Username:
                            <?php
                                include "koneksi.php";
                                $no = $_SESSION['user'];
                                $sebagai=mysql_fetch_array(mysql_query("select * from user where nip='$no'"));
                                $namanya=$sebagai['nama'];
                                echo $no." (".$namanya.")";
                            ?></a></li>
                            <li><a href="logout.php">Keluar</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
             <div class="row">
                    <div class="col-md-12">
                        <h4 class="page-head-line">Menu Siap</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Menu yang barusan dipesan 
                        </div>
                       
                        <div class="panel-body">
                    <div class="table-responsive">
                       <?php
                        include"koneksi.php";
                        $query = mysql_query("select * from pesanan");
//                        $record = mysql_fetch_array($query);
                        $a=true;
                        while($record = mysql_fetch_array($query)){
                            if($record['status_pemesanan']=="Dipesan"){
                            if($a=true){
                            $notaku = $record['id_nota'];
                            $mejaku = $record['nomor_meja'];
                        ?>
                    <table class="table table-striped table-bordered table-hover">
                    <form action="makanan_ready.php" method="post">
                    <tr>
                        <th>Nomor Nota</th>
                        <th><input type="text" name="nota" value="<?php echo $record['id_nota']; ?>" readonly></th>
                    </tr>
                    <tr>
                        <th>Nomor Meja</th>
                        <th><input type="text" name="meja" value="<?php echo $record['nomor_meja']; ?>" readonly></th>
                    </tr>
                    <tr>
                        <th>Tanggal Pesan</th>
                        <th><?php echo $record['tanggal_pesan']; ?></th>
                    </tr>
                    <tr>
                        <th>Status Pemesanan</th>
                        <?php
                          if($record['status_pemesanan']=="Dipesan"){
                        ?>
                        <th><label class="label label-danger"><?php echo $record['status_pemesanan']; ?></label></th>
                        <?php
                          }
                          else if($record['status_pemesanan']=="Ready"){
                        ?>
                        <th><label class="label label-warning"><?php echo $record['status_pemesanan']; ?></label></th>
                        <?php
                          }
                        ?>
                    </tr>
                    <tr>
                        <th>Makanan sudah siap?</th>
                        <th><input type="submit" name="submit" value="Ubah Ready"></th>
                    </tr>
                    </form>
                    </table>
                    
                    <table class="table table-hover">
                    <tr>
                        <th>Menu yang dipesan</th>
                        <th>Banyak yang dipesan</th>
                    </tr>
                    <?php
                        $query2 = mysql_query("select * from pesanan where id_nota='$notaku' && nomor_meja='$mejaku'");
                        while($record2=mysql_fetch_array($query2)){
//                        <!-- hitung total bayar -->
                        $query3 = mysql_query("SELECT SUM(total_harga) AS jumlah_harga FROM pesanan where id_nota='$notaku'");
                        $record3 = mysql_fetch_array($query3);
                    ?>
                    <tr>
                        <td><?php echo $record2['id_menu']; ?></td>
                        <td><?php echo $record2['banyak']; ?></td>
                    </tr>
                    
                    <?php
                        //berhentinya perulangan while
                        }
                        $a=false;
                    ?>
                        <tr>
                        <td><b>Total Harga</b></td>
                        <td><b><?php echo $record3['jumlah_harga']; ?></b></td>
                        </tr>
                        </table><hr>
                    <?php
                        }
                        }
                        }
                    ?>
                    <!-- while berhenti -->  
                        
                        
                        
                    </div>
                    <!-- stop --> 
                            
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Semua Menu 
                        </div>
                    <div class="panel-body">
                    <div class="table-responsive">
                       <?php
                        include"koneksi.php";
                        $query = mysql_query("select * from pesanan");
//                        $record = mysql_fetch_array($query);
                        $a=true;
                        while($record = mysql_fetch_array($query)){
                            if($a=true){
                            $notaku = $record['id_nota'];
                            $mejaku = $record['nomor_meja'];
                        ?>
                    <table class="table table-striped table-bordered table-hover">
                    <form action="makanan_ready.php" method="post">
                    <tr>
                        <th>Nomor Nota</th>
                        <th><input type="text" name="nota" value="<?php echo $record['id_nota']; ?>" readonly></th>
                    </tr>
                    <tr>
                        <th>Nomor Meja</th>
                        <th><input type="text" name="meja" value="<?php echo $record['nomor_meja']; ?>" readonly></th>
                    </tr>
                    <tr>
                        <th>Tanggal Pesan</th>
                        <th><?php echo $record['tanggal_pesan']; ?></th>
                    </tr>
                    <tr>
                        <th>Status Pemesanan</th>
                        <?php
                          if($record['status_pemesanan']=="Dipesan"){
                        ?>
                        <th><label class="label label-danger"><?php echo $record['status_pemesanan']; ?></label></th>
                        <?php
                          }
                          else if($record['status_pemesanan']=="Ready"){
                        ?>
                        <th><label class="label label-warning"><?php echo $record['status_pemesanan']; ?></label></th>
                        <?php
                          }
                        ?>
                    </tr>
                    <tr>
                        <th>Makanan sudah siap?</th>
                        <th><input type="submit" name="submit" value="Ubah Ready"></th>
                    </tr>
                    </form>
                    </table>
                    
                    <table class="table table-hover">
                    <tr>
                        <th>Menu yang dipesan</th>
                        <th>Banyak yang dipesan</th>
                    </tr>
                    <?php
                        $query2 = mysql_query("select * from pesanan where id_nota='$notaku' && nomor_meja='$mejaku'");
                        while($record2=mysql_fetch_array($query2)){
//                        <!-- hitung total bayar -->
                        $query3 = mysql_query("SELECT SUM(total_harga) AS jumlah_harga FROM pesanan where id_nota='$notaku'");
                        $record3 = mysql_fetch_array($query3);
                    ?>
                    <tr>
                        <td><?php echo $record2['id_menu']; ?></td>
                        <td><?php echo $record2['banyak']; ?></td>
                    </tr>
                    
                    <?php
                        //berhentinya perulangan while
                        }
                        $a=false;
                    ?>
                        <tr>
                        <td><b>Total Harga</b></td>
                        <td><b><?php echo $record3['jumlah_harga']; ?></b></td>
                        </tr>
                        </table><hr>
                    <?php
                        }
                        }
                    ?>
                    <!-- while berhenti -->  
                        
                        
                        
                    </div>
                    <!-- stop --> 
                            
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
                <div class="col-md-12" align="center">
                    &copy; 2015 by DreamTeam<br>Template by : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
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
