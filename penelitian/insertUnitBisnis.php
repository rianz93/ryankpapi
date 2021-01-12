<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("UB".rand(10,99).$_FILES['berkas']['name']);
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."penelitian/".$dir_berkas.$nama_file;
}else{
	$pathFile = $_POST['berkas'];
}
// MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `unit_bisnis_hr`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "UB". + rand(10,99).+($total_row + 1);

if(count($_POST) == 0){ 
	echo json_encode(array('status' =>'gagal'));
}
else{
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$aktivitas 		= "Mengubah Pelaporan";
		$_rowVariant 	= "warning";
	}
	else{
		$id = $new_id;
		$aktivitas 		= "Menambah Pelaporan";
		$_rowVariant 	= "success";
	}

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= '".$aktivitas."',
				   		aktivitas_pelaporan 	= 'Unit bisnis Hasil Riset',
				   		aktivitas_pengguna		= '".$_POST['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Unit Bisnis : '.$_POST['nama']."',
				   		_rowVariant 			= '".$_rowVariant."'
				   	");
	
	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `unit_bisnis_hr` 
				   SET 	unit_bisnis_hr_id 				= '".$id."',
				   		unit_bisnis_hr_lingkup_kegiatan = '".$_POST['lingkup']."',
				   		unit_bisnis_hr_nama 			= '".$_POST['nama']."',
				   		user_id							= '".$_POST['user_id']."',
				   		unit_bisnis_hr_berkas 			= '".$pathFile."'

				   		ON DUPLICATE KEY UPDATE
				   		
				   		unit_bisnis_hr_lingkup_kegiatan = '".$_POST['lingkup']."',
				   		unit_bisnis_hr_nama 			= '".$_POST['nama']."',
				   		unit_bisnis_hr_berkas 			= '".$pathFile."'			   		
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

