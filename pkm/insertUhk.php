<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("UHK".rand(10,99).$_FILES['berkas']['name']);
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."pkm/".$dir_berkas.$nama_file;
}else{
	$pathFile = $_POST['berkas'];
}
// MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `pkm_uhk`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "UHK". + rand(10,99).+($total_row + 1);

if(count($_POST) == 0){ 
	echo json_encode(array('status' =>'gagal'));
}
else{
	if(isset($_POST['id'])){
		$id = $_POST['id'];
	}
	else{
		$id = $new_id;
	}

	
	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `pkm_uhk` 
				   SET 	pkm_uhk_id 			 		= '".$id."',
				   		pkm_uhk_tahun 				= '".$_POST['tahun']."',
				   		pkm_uhk_pengurus 			= '".$_POST['pengurus']."',
				   		pkm_uhk_unit 	 			= '".$_POST['unit']."',
				   		user_id		 				= '".$_POST['user_id']."',
				   		pkm_uhk_berkas				= '".$pathFile."'
				
				   		ON DUPLICATE KEY UPDATE
				   		
				   		pkm_uhk_tahun 				= '".$_POST['tahun']."',
				   		pkm_uhk_pengurus 			= '".$_POST['pengurus']."',
				   		pkm_uhk_unit 	 			= '".$_POST['unit']."',
				   		pkm_uhk_berkas				= '".$pathFile."'
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>