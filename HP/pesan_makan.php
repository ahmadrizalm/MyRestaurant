<?php
	include"koneksi.php";

	$nota = $_POST['nota'];
	$meja = $_POST['meja'];
	$tgl_pesan = date("Y-m-d H:i:s");
    $totalharga = 10000;
    $status = "Dipesan";
    $a = 1;
    $batas = $_POST['no'];
    while($a <= $batas){
        $a++;
        $id_menu = $_POST['idmenu'.$a];
        $banyak = $_POST['jumlah'.$a];
        $harga = $_POST['harga'.$a];
        $totalharga = $banyak * $harga;
        $query = mysql_query("insert into pesanan (id_nota, nomor_meja, tanggal_pesan, id_menu, banyak, total_harga, status_pemesanan) values ('$nota', '$meja', '$tgl_pesan', '$id_menu','$banyak', '$totalharga', '$status')") or die(mysql_error());
    }
	if($query){
        echo "<script> alert('Pemesanan telah diproses!'); location = 'ui.php'; </script>";
    }
	else {
		echo "<script> alert('Gagal melakukan pemesanan!'); location = 'ui.php'; </script>";
	 }	
?>