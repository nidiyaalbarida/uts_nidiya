<?php

$kode = $_GET['kode'];

require_once('koneksi.php');

$sql = "DELETE FROM tb_komputer WHERE kode=$kode;";

if(mysqli_query($con,$sql)){
	echo 'Berhasil Menghapus Komputer';
	}else{
	echo 'Gagal Menghapus Komputer';
	}

mysqli_close($con);
?>