<?php
	include"koneksi.php";

	$nip =  $_POST['nip'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$tmp_lahir = $_POST['tmp_lahir'];
	$jabatan = $_POST['jabatan'];

    if($password==""){
	$query = mysql_query("UPDATE user SET nama='$nama', tgl_lahir='$tgl_lahir', tmp_lahir='$tmp_lahir', jabatan='$jabatan' WHERE nip='$nip'");
    }
    else{
    $query = mysql_query("UPDATE user SET password='$password', nama='$nama', tgl_lahir='$tgl_lahir', tmp_lahir='$tmp_lahir', jabatan='$jabatan' WHERE nip='$nip'");
    }
		
	if($query){
        echo "<script> alert('Berhasil mengubah data user!'); location = 'page.php'; </script>";
    }
	else {
		echo "<script> alert('Gagal mengubah data user!'); location = 'page.php'; </script>";
	 }	
?>