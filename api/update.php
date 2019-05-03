<?php


if($_SERVER['REQUEST_METHOD']=='POST'){
	
	$kode = $_POST['kode'];
	$name = $_POST['name'];
	$desg = $_POST['desg'];

	require_once('koneksi.php')

	$sql = "UPDATE tb_komputer SET nama_kompter = '$name', jenis_komputer = '$desg' WHERE kode = $kode;";

	if(mysqli_query($con,$sql)){
	echo 'Berhasil Update Data Komputer';
	}else{
	echo 'Gagal Update Data Komputer';
	}
	mysqli_close($con);

}

?>