<?php

request_once('koneksi.php');

$sql = "SELECT * FROM tb_komputer";

$r = mysql_query($con,$sql);

$result = array();

while($row = mysql_fetch_array($r)){
	
	array_push($result,array(
	"kode"=>$row['kode'],
	"name"=>$row['nama']
	));
}

echo json_encode(array('result'=>$result));

mysqli_close($con);

?>