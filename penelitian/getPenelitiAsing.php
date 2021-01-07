<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Nama","Jenis Kelamin", "Akademik", "Negara", "Tanggal tinggal",);
	$body = [];
	if(isset($_GET['id'])){
		$peneliti_temp = json_decode($dale->kueri("SELECT * FROM `peneliti_asing`  WHERE user_id ='".$_GET['id']."'"));
	}else{
		$peneliti_temp = json_decode($dale->kueri("SELECT * FROM `peneliti_asing`"));
	}
	

	for($i = 0; $i < sizeof($peneliti_temp); $i++){
		$peneliti_id 				= $peneliti_temp[$i] -> peneliti_id;
		$peneliti_tahun 			= $peneliti_temp[$i] -> peneliti_tahun;
		$peneliti_nama 				= $peneliti_temp[$i] -> peneliti_nama;
		$peneliti_jenis_kelamin 	= $peneliti_temp[$i] -> peneliti_jenis_kelamin;
		$peneliti_akademik 			= $peneliti_temp[$i] -> peneliti_akademik;
		$peneliti_negara 			= $peneliti_temp[$i] -> peneliti_negara;
		$peneliti_tanggal_mulai 	= $peneliti_temp[$i] -> peneliti_tanggal_mulai;
		$peneliti_tanggal_selesai 	= $peneliti_temp[$i] -> peneliti_tanggal_selesai;
		$peneliti_periode 			= [$peneliti_tanggal_mulai, $peneliti_tanggal_selesai];
		
		$body[$i][0] = array('title' => $peneliti_id, 	 			'type' => 'id');
		$body[$i][1] = array('title' => $peneliti_tahun, 			'type' => 'text');
		$body[$i][2] = array('title' => $peneliti_nama, 			'type' => 'text');
		$body[$i][3] = array('title' => $peneliti_jenis_kelamin, 	'type' => 'gender');
		$body[$i][4] = array('title' => $peneliti_akademik, 		'type' => 'text');
		$body[$i][5] = array('title' => $peneliti_negara, 			'type' => 'text');
		$body[$i][6] = array('title' => $peneliti_periode, 			'type' => 'periodic');

		$data_pack = array('head' => $head, 'body' => $body);
	}
	echo json_encode($data_pack);
 ?>

