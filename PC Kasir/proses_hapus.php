<?php
	include"koneksi.php";

	$nip = $_POST['nip'];

	$query = mysql_query("delete from user where nip=$nip");
		
	if($query){
        echo "<script> alert('Berhasil menghapus user!'); location = 'page.php'; </script>";
    }
	else {
		echo "<script> alert('Gagal menghapus user!'); location = 'page.php'; </script>";
	 }	
?>