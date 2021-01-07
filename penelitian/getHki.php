<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Nama Dosen","NIDN", "judul", "Jenis", "No pendaftaran","Status","Nomor HKI");
	$body = [];
	if(isset($_GET['id'])){
		$hki_temp = json_decode($dale->kueri("SELECT * FROM `penelitian_hki` WHERE user_id ='".$_GET['id']."'"));
	}else{
		$hki_temp = json_decode($dale->kueri("SELECT * FROM `penelitian_hki`"));
	}
	

	for($i = 0; $i < sizeof($hki_temp); $i++){
		$hki_id 				= $hki_temp[$i] -> hki_id;
		$hki_tahun 				= $hki_temp[$i] -> hki_tahun;
		$hki_nama_dosen 		= $hki_temp[$i] -> hki_nama_dosen;
		$hki_NIDN 				= $hki_temp[$i] -> hki_NIDN;
		$hki_judul 				= $hki_temp[$i] -> hki_judul;
		$hki_jenis 				= $hki_temp[$i] -> hki_jenis;
		$hki_no_pendaftaran 	= $hki_temp[$i] -> hki_no_pendaftaran;
		$hki_status 			= $hki_temp[$i] -> hki_status;
		$hki_nomor 				= $hki_temp[$i] -> hki_nomor;
		$hki_berkas 			= $hki_temp[$i] -> hki_berkas;
		
		$body[$i][0] 	= array('title' => $hki_id, 	 		'type' => 'id');
		$body[$i][1] 	= array('title' => $hki_tahun, 			'type' => 'text');
		$body[$i][2] 	= array('title' => $hki_nama_dosen, 	'type' => 'text');
		$body[$i][3] 	= array('title' => $hki_NIDN , 			'type' => 'text');
		$body[$i][4] 	= array('title' => $hki_judul, 			'type' => 'text');
		$body[$i][5] 	= array('title' => $hki_jenis, 			'type' => 'text');
		$body[$i][6] 	= array('title' => $hki_no_pendaftaran, 'type' => 'text');
		$body[$i][7] 	= array('title' => $hki_status, 	 	'type' => 'text');
		$body[$i][8] 	= array('title' => $hki_nomor , 	 	'type' => 'text');
		$body[$i][9] 	= array('title' => $hki_berkas, 	 	'type' => 'file');

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

