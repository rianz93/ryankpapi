<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

// // MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penyelenggaraan_forum`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "PF". + rand(10,99).+($total_row + 1);

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
				   		aktivitas_pelaporan 	= 'Penyelenggaraan Forum',
				   		aktivitas_pengguna		= '".$_POST['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Kegiatan : '.$_POST['namaKegiatan']."',
				   		_rowVariant 			= '".$_rowVariant."'
				   	");
	
	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `penyelenggaraan_forum` 
				   SET 	penyelenggaraan_forum_id 				= '".$id."',
				   		penyelenggaraan_forum_tahun_kegiatan 	= '".$_POST['tahun']."',
				   		penyelenggaraan_forum_nama_kegiatan		= '".$_POST['namaKegiatan']."',
				   		penyelenggaraan_forum_level 	 		= '".$_POST['level']."',
				   		penyelenggaraan_forum_pelaksana 		= '".$_POST['pelaksana']."',
				   		penyelenggaraan_forum_mitra 			= '".$_POST['mitra']."',
				   		penyelenggaraan_forum_tanggal_mulai 	= '".$_POST['tanggalstart']."',
				   		penyelenggaraan_forum_tanggal_selesai 	= '".$_POST['tanggalend']."',
				   		user_id									= '".$_POST['user_id']."',
				   		penyelenggaraan_forum_tempat 	 		= '".$_POST['tempat']."'

				   		ON DUPLICATE KEY UPDATE

				   		penyelenggaraan_forum_tahun_kegiatan 	= '".$_POST['tahun']."',
				   		penyelenggaraan_forum_nama_kegiatan		= '".$_POST['namaKegiatan']."',
				   		penyelenggaraan_forum_level 	 		= '".$_POST['level']."',
				   		penyelenggaraan_forum_pelaksana 		= '".$_POST['pelaksana']."',
				   		penyelenggaraan_forum_mitra 			= '".$_POST['mitra']."',
				   		penyelenggaraan_forum_tanggal_mulai 	= '".$_POST['tanggalstart']."',
				   		penyelenggaraan_forum_tanggal_selesai 	= '".$_POST['tanggalend']."',
				   		penyelenggaraan_forum_tempat 	 		= '".$_POST['tempat']."'
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

