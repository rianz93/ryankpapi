<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

// // MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `peneliti_asing`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "PA". + rand(10,99).+($total_row + 1);

if(count($_POST) == 0){ 
	echo json_encode(array('status' =>'gagal'));
}
else{
	if(isset($_POST['id'])){
		$id 			= $_POST['id'];
		$aktivitas 		= "Mengubah Pelaporan";
		$_rowVariant 	= "warning";
	}
	else{
		$id 			= $new_id;
		$aktivitas 		= "Menambah Pelaporan";
		$_rowVariant 	= "success";
	}

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas = '".$aktivitas."',
				   		aktivitas_pelaporan = 'Peneliti Asing',
				   		aktivitas_pengguna	= '".$_POST['user_name']."',
				   		aktivitas_keterangan = '".'Nama Peneliti : '.$_POST['nama']."',
				   		_rowVariant = '".$_rowVariant."'
				   	");

	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `peneliti_asing` 
				   SET 	peneliti_id 			 = '".$id."',
				   		peneliti_tahun 			 = '".$_POST['tahun']."',
				   		peneliti_nama 			 = '".$_POST['nama']."',
				   		peneliti_jenis_kelamin 	 = '".$_POST['jenisKelamin']."',
				   		peneliti_akademik 		 = '".$_POST['akademik']."',
				   		peneliti_negara 		 = '".$_POST['negara']."',
				   		peneliti_tanggal_mulai 	 = '".$_POST['tanggalstart']."',
				   		user_id					 = '".$_POST['user_id']."',
				   		peneliti_tanggal_selesai = '".$_POST['tanggalend']."'

				   		ON DUPLICATE KEY UPDATE

				   		peneliti_tahun 			 = '".$_POST['tahun']."',
				   		peneliti_nama 			 = '".$_POST['nama']."',
				   		peneliti_jenis_kelamin 	 = '".$_POST['jenisKelamin']."',
				   		peneliti_akademik 		 = '".$_POST['akademik']."',
				   		peneliti_negara 		 = '".$_POST['negara']."',
				   		peneliti_tanggal_mulai 	 = '".$_POST['tanggalstart']."',
				   		peneliti_tanggal_selesai = '".$_POST['tanggalend']."'
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

