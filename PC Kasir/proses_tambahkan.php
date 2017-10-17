<?php
	include"koneksi.php";

	$nip = $_POST['nip'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$jabatan = $_POST['jabatan'];
	$query = mysql_query("insert into user values
	('$nip', '$password', '$nama', '$tgl_lahir','$tmp_lahir', '$jabatan')") or die(mysql_error());
		
	if($query){
        echo "<script> alert('Berhasil menambahkan user!'); location = 'page.php'; </script>";
    }
	else {
		echo "<script> alert('Gagal menambahkan user!'); location = 'page.php'; </script>";
	 }	
?>