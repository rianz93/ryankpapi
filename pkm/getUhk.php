<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Unit Usaha", "Pengurus");
	$body = [];
	if(isset($_GET['id'])){
		$uhk_temp = json_decode($dale->kueri("SELECT * FROM `pkm_uhk` where user_data = '".$_GET['id']."'"));
	}else{
		$uhk_temp = json_decode($dale->kueri("SELECT * FROM `pkm_uhk`"));
	}
	for($i = 0; $i < sizeof($uhk_temp); $i++){
		$pkm_uhk_id 				= $uhk_temp[$i] -> pkm_uhk_id;
		$pkm_uhk_tahun		 		= $uhk_temp[$i] -> pkm_uhk_tahun;
		$pkm_uhk_unit		 		= $uhk_temp[$i] -> pkm_uhk_unit;
		$pkm_uhk_pengurus		 	= $uhk_temp[$i] -> pkm_uhk_pengurus;
		$pkm_uhk_berkas 			= $uhk_temp[$i] -> pkm_uhk_berkas;
		
		$body[$i][0] = array('title' => $pkm_uhk_id, 	 	'type' => 'id');
		$body[$i][1] = array('title' => $pkm_uhk_tahun, 	'type' => 'text');
		$body[$i][2] = array('title' => $pkm_uhk_unit, 		'type' => 'text');
		$body[$i][3] = array('title' => $pkm_uhk_pengurus, 	'type' => 'text');
		$body[$i][4] = array('title' => $pkm_uhk_berkas , 	'type' => 'file');
		

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

