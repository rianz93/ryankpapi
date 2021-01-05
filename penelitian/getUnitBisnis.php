<?php 
	require '../api_conf.php';

	$head = array("Nama Unit Bisnis", "Lingkup Kegiatan",);
	$body = [];
	if(isset($_GET['id'])){
		$uhr_temp = json_decode($dale->kueri("SELECT * FROM `unit_bisnis_hr` where user_id = '".$_GET['id']."'"));
	}else{
		$uhr_temp = json_decode($dale->kueri("SELECT * FROM `unit_bisnis_hr`"));
	}
	for($i = 0; $i < sizeof($uhr_temp); $i++){
		$unit_bisnis_hr_id 					= $uhr_temp[$i] -> unit_bisnis_hr_id;
		$unit_bisnis_hr_nama		 		= $uhr_temp[$i] -> unit_bisnis_hr_nama;
		$unit_bisnis_hr_lingkup_kegiatan	= $uhr_temp[$i] -> unit_bisnis_hr_lingkup_kegiatan;
		$unit_bisnis_hr_berkas 				= $uhr_temp[$i] -> unit_bisnis_hr_berkas;
		
		$body[$i][0] = array('title' => $unit_bisnis_hr_id, 	 			'type' => 'id');
		$body[$i][1] = array('title' => $unit_bisnis_hr_nama, 				'type' => 'text');
		$body[$i][2] = array('title' => $unit_bisnis_hr_lingkup_kegiatan, 	'type' => 'text');
		$body[$i][3] = array('title' => $unit_bisnis_hr_berkas, 			'type' => 'file');

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

