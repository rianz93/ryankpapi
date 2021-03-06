<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("HK".rand(10,99).$_FILES['berkas']['name']);
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."penelitian/".$dir_berkas.$nama_file;
}else{
	$pathFile = $_POST['berkas'];
}
// MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penelitian_hki`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "HK". + rand(10,99).+($total_row + 1);

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
				   		aktivitas_pelaporan 	= 'Hak Kekayaan Intelektual (Penelitian)',
				   		aktivitas_pengguna		= '".$_POST['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Judul : '.$_POST['judul']."',
				   		_rowVariant 			= '".$_rowVariant."'
				   	");
	
	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `penelitian_hki` 
				   SET 	hki_id 			 	= '".$id."',
				   		hki_tahun 			= '".$_POST['tahun']."',
				   		hki_nama_dosen 		= '".$_POST['nama']."',
				   		hki_NIDN 	 		= '".$_POST['nidn']."',
				   		hki_judul 		 	= '".$_POST['judul']."',
				   		hki_jenis 		 	= '".$_POST['jenis']."',
				   		hki_no_pendaftaran 	= '".$_POST['noPendaftaran']."',
				   		hki_status 			= '".$_POST['status']."',
				   		hki_nomor 			= '".$_POST['noHki']."',
				   		user_id				= '".$_POST['user_id']."',
				   		hki_berkas 			= '".$pathFile."'

				   		ON DUPLICATE KEY UPDATE
				   		
				   		hki_tahun 			= '".$_POST['tahun']."',
				   		hki_nama_dosen 		= '".$_POST['nama']."',
				   		hki_NIDN 	 		= '".$_POST['nidn']."',
				   		hki_judul 		 	= '".$_POST['judul']."',
				   		hki_jenis 		 	= '".$_POST['jenis']."',
				   		hki_no_pendaftaran 	= '".$_POST['noPendaftaran']."',
				   		hki_status 			= '".$_POST['status']."',
				   		hki_nomor 			= '".$_POST['noHki']."',
				   		hki_berkas 			= '".$pathFile."'				   		
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

