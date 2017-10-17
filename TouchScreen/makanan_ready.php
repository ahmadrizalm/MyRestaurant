<?php
	include"koneksi.php";

	$nota = $_POST['nota'];
	$meja = $_POST['meja'];

    $query = mysql_query("UPDATE pesanan SET status_pemesanan='Ready' WHERE id_nota='$nota' && nomor_meja='$meja'");
		
	if($query){
        echo "<script> alert('Makanan telah siap untuk diantar ke pelanggan!'); location = 'ui.php'; </script>";
    }
	else {
		echo "<script> alert('Syntax salah!'); location = 'ui.php'; </script>";
	 }	
?>