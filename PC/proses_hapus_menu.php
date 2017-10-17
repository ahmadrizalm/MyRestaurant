<?php
	include"koneksi.php";

	$id =  $_POST['id'];

    $query = mysql_query("delete from menu where id_menu=$id");
		
	if($query){
        echo "<script> alert('Berhasil mengubah data menu!'); location = 'page.php'; </script>";
    }
	else {
		echo "<script> alert('Gagal mengubah data menu!'); location = 'page.php'; </script>";
	 }	
?>