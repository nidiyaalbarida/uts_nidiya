<?php

$id = $_GET['id'];

require_once('koneksi.php');

$sql = "SELECT * FROM tb_komputer WHERE id=$id";

$r = mysqli_query($con,$sql);

$result = array();
$row = mysqli_fetch_array($r);
array_push($result,array(
	"kode"=>$row['kode'],
	"name"=>$row['nama komputer'],
	"desg"=>$row['jenis komputer']
	));

echo json_encode(array('result'=>$result));

mysql_close($con);

?>