<?php 
	require '../api_conf.php';

	$head = array("Tahun Kegiatan", "Nama Kegiatan","Level", "Pelaksana", "Mitra", "Tanggal Pelaksanaan","Tempat",);
	$body = [];
	if(isset($_GET['id'])){
		$PF = json_decode($dale->kueri("SELECT * FROM `penyelenggaraan_forum` where user_id = '".$_GET['id']."'"));
	}else{
		$PF = json_decode($dale->kueri("SELECT * FROM `penyelenggaraan_forum`"));
	}
	

	for($i = 0; $i < sizeof($PF); $i++){
		$penyelenggaraan_forum_id 				= $PF[$i] -> penyelenggaraan_forum_id;
		$penyelenggaraan_forum_tahun_kegiatan 	= $PF[$i] -> penyelenggaraan_forum_tahun_kegiatan;
		$penyelenggaraan_forum_nama 			= $PF[$i] -> penyelenggaraan_forum_nama_kegiatan;
		$penyelenggaraan_forum_level 			= $PF[$i] -> penyelenggaraan_forum_level;
		$penyelenggaraan_forum_pelaksana 		= $PF[$i] -> penyelenggaraan_forum_pelaksana;
		$penyelenggaraan_forum_mitra 			= $PF[$i] -> penyelenggaraan_forum_mitra;
		$penyelenggaraan_forum_tanggal_mulai 	= $PF[$i] -> penyelenggaraan_forum_tanggal_mulai;
		$penyelenggaraan_forum_tanggal_selesai 	= $PF[$i] -> penyelenggaraan_forum_tanggal_selesai;
		$penyelenggaraan_forum_periode 			= [$penyelenggaraan_forum_tanggal_mulai, $penyelenggaraan_forum_tanggal_selesai];
		$penyelenggaraan_forum_tempat 			= $PF[$i] -> penyelenggaraan_forum_tempat;
		
		$body[$i][0] = array('title' => $penyelenggaraan_forum_id, 	 			'type' => 'id');
		$body[$i][1] = array('title' => $penyelenggaraan_forum_tahun_kegiatan,	'type' => 'text');
		$body[$i][2] = array('title' => $penyelenggaraan_forum_nama, 			'type' => 'text');
		$body[$i][3] = array('title' => $penyelenggaraan_forum_level, 			'type' => 'text');
		$body[$i][4] = array('title' => $penyelenggaraan_forum_pelaksana, 		'type' => 'text');
		$body[$i][5] = array('title' => $penyelenggaraan_forum_mitra, 			'type' => 'text');
		$body[$i][6] = array('title' => $penyelenggaraan_forum_periode, 		'type' => 'periodic');
		$body[$i][7] = array('title' => $penyelenggaraan_forum_tempat, 			'type' => 'text');

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

