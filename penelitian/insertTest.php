<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("PJ".rand(10,99)."test");
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."penelitian/".$dir_berkas.$nama_file;

	echo json_encode(array('status' => ">>FILE MASUK".$_FILES['berkas']['error'].">><<"));
}else{
	echo json_encode(array('status' => ">>FILE KOSONG<<"));
}
?>