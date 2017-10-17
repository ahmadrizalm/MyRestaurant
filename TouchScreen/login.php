<?php

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$check = substr($username, "0", "2");

if($check=="12"){
    $q = mysql_query("select * from user where nip='$username' and password='$password'");

    if (mysql_num_rows($q) == 1) {
        //kalau username dan password sudah terdaftar di database
        //buat session dengan nama username dengan isi nama user yang login
        $_SESSION['user'] = $username;

        //redirect ke halaman home
        header('location:home.php');
    } else {
        //kalau username ataupun password tidak terdaftar di database
        echo "<script> alert('Username atau Password anda salah!! Silahkan coba lagi.'); location = 'index.php'; </script>";
    }
}
else{
    echo "<script> alert('Maaf, anda bukan Chef, tidak dapat melakukan Login!'); location = 'index.php'; </script>";
}
?>