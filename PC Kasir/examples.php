<?php 
session_start();

if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
	header('location:index.php');
}
if(isset($_SESSION['user'])){
	$username = $_SESSION['user'];
}
?>
<!DOCTYPE HTML>
<html>

    <head>
        <title>MyRestaurant</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
    </head>

    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <div id="logo_text">
                        <!-- class="logo_colour", allows you to change the colour of the text -->
                        <h1><a href="home.php">My<span class="logo_colour">Restaurant</span></a></h1>
                        <h2>Love me like you do, Touch me like you do~</h2>
                    </div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                        <li><a href="home.php">Halaman Awal</a></li>
                        <li class="selected"><a href="examples.php">Lihat Daftar Pesanan</a></li>
                        <li><a href="page.php">Pembayaran</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </div>
            </div>
            <div id="content_header"></div>
            <div id="site_content">
                <div class="sidebar">
                    <!-- insert your sidebar items here -->
                    <img src="file/filkom.png">
                    <div id="elips">
                    Anda Login Sebagai:<br>
                    <?php
                            include "koneksi.php";
                            $no = $_SESSION['user'];
                            $sebagai=mysql_fetch_array(mysql_query("select * from user where nip='$no'"));
                            $namanya=$sebagai['nama'];
                            echo $no." (".$namanya.")";
                    ?>
                    </div>
                    <h3>Dream Team</h3>
                    <a href="http://www.facebook.com/ahmadrizalm">
                        <img src="file/bar.png"><br>
                        Ahmad Rizal M<br>
                    </a>
                    <a href="http://www.facebook.com/brillianarc">
                        <img src="file/bar.png"><br>
                        Brillian Aristyo R<br>
                    </a>    
                    <a href="http://www.facebook.com/imandos88">
                        <img src="file/bar.png"><br>
                        Iman Aidil N<br>
                    </a>    
                    <a href="http://www.facebook.com/muchibbuddin.abas">
                        <img src="file/abas.png"><br>
                        Muchibbuddin Abas<br>
                    </a>
                    <h3>Link Lainnya</h3>
                    <ul>
                        <li><a href="http://ub.ac.id">UB Official</a></li>
                        <li><a href="http://filkom.ub.ac.id">PTIIK UB</a></li>
                        <li><a href="http://siam.ub.ac.id">SIAM UB</a></li>
                        <li><a href="http://www.github.com">GitHub</a></li>
                    </ul>
                    <h3>Pencarian</h3>
                    <form method="post" action="#" id="search_form">
                        <p>
                            <input class="search" type="text" name="search_field" value="Masukkan kata kunci....." />
                            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
                        </p>
                    </form>
                </div>
                <div id="content">
                    <!-- insert the page content here -->
                    <h3>Lihat Daftar Pesanan</h3>
                    <hr>
                    <br><br>
                    <?php
                        include"koneksi.php";
                        $query = mysql_query("select * from pesanan");
                        $record = mysql_fetch_array($query);
                        $bts = $record['id_nota'];
//                        for($i=0;$i<=$bts;$i++) {
//                            while($record = mysql_fetch_array($query)){
                            do {
                            $notaku = $record['id_nota'];
                            $mejaku = $record['nomor_meja'];
                    ?>
                    <table style="border-spacing:0">
                    <tr>
                        <th>Nomor Nota</th>
                        <th><?php echo $record['id_nota']; ?></th>
                    </tr>
                    <tr>
                        <th>Nomor Meja</th>
                        <th><?php echo $record['nomor_meja']; ?></th>
                    </tr>
                    <tr>
                        <th>Tanggal Pesan</th>
                        <th><?php echo $record['tanggal_pesan']; ?></th>
                    </tr>
                    <tr>
                        <th>Status Pemesanan</th>
                        <th><?php echo $record['status_pemesanan']; ?></th>
                    </tr>
                    </table>
                    
                    <table style="border-spacing:0">
                    <tr>
                        <th>Menu yang dipesan</th>
                        <th>Banyak yang dipesan</th>
                        <th>Jumlah Harga</th>
                    </tr>
                    <?php
                        $query2 = mysql_query("select * from pesanan where id_nota='$notaku' && nomor_meja='$mejaku'");
                        while($record2=mysql_fetch_array($query2)){
//                        <!-- hitung total bayar -->
                        $query3 = mysql_query("SELECT SUM(total_harga) AS jumlah_harga FROM pesanan where id_nota='$notaku' && nomor_meja='$mejaku'");
                        $record3 = mysql_fetch_array($query3);
                    ?>
                    <tr>
                        <td><?php echo $record2['id_menu']; ?></td>
                        <td><?php echo $record2['banyak']; ?></td>
                        <td><?php echo $record2['total_harga']; ?></td>
                    </tr>
                    
                    <?php
                        //berhentinya perulangan while
                        }
                    ?>
                        <tr>
                        <td>&nbsp;</td>
                        <td><b>Total Harga</b></td>
                        <td><b><?php echo $record3['jumlah_harga']; ?></b></td>
                        </tr>
                        </table><hr>
                    <?php
                        }
                        while($record=mysql_fetch_array($query));
                    ?>
                    
                    <hr>
                </div>
                        <br>
                </div>
            </div>
            <div id="content_footer"></div>
            <div id="footer">
                MyRestaurant by Dream Team - 2015<hr>
                Copyright &copy; colour_orange | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a>
            </div>
        </div>
    </body>
</html>
