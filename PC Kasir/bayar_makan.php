<?php
	include"koneksi.php";

	$nota = $_POST['nota'];
	$meja = $_POST['meja'];

    $query = mysql_query("UPDATE pesanan SET status_pemesanan='Lunas' WHERE id_nota='$nota' && nomor_meja='$meja'");
		
	if($query){
        echo "<script> alert('Transaksi pembayaran berhasil!'); location = 'examples.php'; </script>";
    }
	else {
		echo "<script> alert('Transaksi pembayaran gagal!'); location = 'examples.php'; </script>";
	 }	
?>