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
                        <li class="selected"><a href="examples.php">Kelola Menu</a></li>
                        <li><a href="page.php">Kelola User</a></li>
                        <li><a href="another_page.php">Hasil Penjualan</a></li>
                        <li><a href="contact.php">Pola Konsumsi</a></li>
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
                    <h3>Tambah Menu Makan dan Minum</h3>
                    <hr><br><br>
                    <table style="border-spacing:0">
                        <form action="proses_tambahkan_menu.php" method="post">
                            <tr><td>#id</td><td><input type=text name="id"></td></tr>
                            <tr><td>Nama Menu</td><td><input type=text name="nama"></td></tr>
                            <tr><td>Harga</td><td><input type=text name="harga"></td></tr>
                    </table>
                        <input style="width:42%" type="submit" name="tambah" value="Tambahkan!">
                        </form>
                </div>
            </div>
            <div id="content_footer"></div>
            <div id="footer">
                MyRestaurant by Dream Team - 2015<hr>
                Copyright &copy; colour_orange | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a>
            </div>
            </div>
        </div>
    </body>
</html>
