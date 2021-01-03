<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Nama Mitra", "Bidang Usaha");
	$body = [];
	if(isset($_GET['id'])){
		$mbh_temp = json_decode($dale->kueri("SELECT * FROM `pkm_mbh` where user_data = '".$_GET['id']."'"));
	}else{
		$mbh_temp = json_decode($dale->kueri("SELECT * FROM `pkm_mbh`"));
	}
	for($i = 0; $i < sizeof($mbh_temp); $i++){
		$pkm_mbh_id 				= $mbh_temp[$i] -> pkm_mbh_id;
		$pkm_mbh_tahun		 		= $mbh_temp[$i] -> pkm_mbh_tahun;
		$pkm_mbh_nama		 		= $mbh_temp[$i] -> pkm_mbh_nama;
		$pkm_mbh_bidang_usaha		 = $mbh_temp[$i] -> pkm_mbh_bidang_usaha;
		$pkm_mbh_berkas 			= $mbh_temp[$i] -> pkm_mbh_berkas;
		
		$body[$i][0] = array('title' => $pkm_mbh_id, 	 		'type' => 'id');
		$body[$i][1] = array('title' => $pkm_mbh_tahun, 		'type' => 'text');
		$body[$i][2] = array('title' => $pkm_mbh_nama, 			'type' => 'text');
		$body[$i][3] = array('title' => $pkm_mbh_bidang_usaha, 	'type' => 'text');
		$body[$i][4] = array('title' => $pkm_mbh_berkas , 		'type' => 'file');
		

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

