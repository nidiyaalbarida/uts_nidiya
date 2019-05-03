<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = $_POST['name'];
	$desg = $_POST['desg'];
	$sal = $_POST['salary'];

	$sql = "INSERT INTO tb_komputer (kode_komputer,nama_komputer,jenis_komputer) VALUES ('$name','$desg','$sal')";

	request_once('koneksi.php');

	if(mysql_query($con,$sql)){
	echo 'Berhasil Menambahkan Komputer';
	}else{
	echo 'Gagal Menambahkan Komputer'
	}

	mysql_close($con);
	
}