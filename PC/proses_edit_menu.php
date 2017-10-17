<?php
	include"koneksi.php";

	$id =  $_POST['id'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];

    $query = mysql_query("UPDATE menu SET nama_menu='$nama', harga_menu='$harga' WHERE id_menu='$id'");
		
	if($query){
        echo "<script> alert('Berhasil mengubah data menu!'); location = 'page.php'; </script>";
    }
	else {
		echo "<script> alert('Gagal mengubah data menu!'); location = 'page.php'; </script>";
	 }	
?>