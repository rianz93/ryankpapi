<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

// // MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `hibah_ditlitabmas`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "HD". + rand(10,99).+($total_row + 1);

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
				   		aktivitas_pelaporan 	= 'Hibah Ditlitabmas (Penelitian)',
				   		aktivitas_pengguna		= '".$_POST['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Judul : '.$_POST['judul']."',
				   		_rowVariant 			= '".$_rowVariant."'
				   	");
	
	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `hibah_ditlitabmas` 
				   SET 	hibah_id 				 	= '".$id."',
				   		hibah_tahun_kegiatan 		= '".$_POST['tahun']."',
				   		hibah_judul_penelitian 		= '".$_POST['judul']."',
				   		hibah_personil_penelitian 	= '".$_POST['personil']."',
				   		hibah_jabatan 		 		= '".$_POST['jabatan']."',
				   		hibah_bidang_penelitian 	= '".$_POST['bidang']."',
				   		user_id						= '".$_POST['user_id']."',
				   		hibah_dana 	 				= '".$_POST['dana']."'

				   		ON DUPLICATE KEY UPDATE

				   		hibah_tahun_kegiatan 		= '".$_POST['tahun']."',
				   		hibah_judul_penelitian 		= '".$_POST['judul']."',
				   		hibah_personil_penelitian 	= '".$_POST['personil']."',
				   		hibah_jabatan 		 		= '".$_POST['jabatan']."',
				   		hibah_bidang_penelitian 	= '".$_POST['bidang']."',
				   		hibah_dana 	 				= '".$_POST['dana']."'
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

