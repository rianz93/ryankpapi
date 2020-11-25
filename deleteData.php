<?php 	
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');
require 'api_conf.php';

$valueId 		= $_GET['id'];
$namaTable 		= $_GET['namaTable'];
$namaId 		= $_GET['namaId'];

$dale->kueri("DELETE FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'");

echo json_encode(array('status'=>'berhasil'));
 ?>
