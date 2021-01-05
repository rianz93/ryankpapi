<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Judul", "Media", "Jenis", "Volume", "Nomor", "Halaman", "Url");
	$body = [];
	if(isset($_GET['id'])){
		$pmm_temp = json_decode($dale->kueri("SELECT * FROM `publikasi_media_massa` where user_id = '".$_GET['id']."'"));
	}else{
		$pmm_temp = json_decode($dale->kueri("SELECT * FROM `publikasi_media_massa`"));
	}
	for($i = 0; $i < sizeof($pmm_temp); $i++){
		$publikasi_media_massa_id 		= $pmm_temp[$i] -> publikasi_media_massa_id;
		$publikasi_media_massa_tahun	= $pmm_temp[$i] -> publikasi_media_massa_tahun;
		$publikasi_media_massa_judul	= $pmm_temp[$i] -> publikasi_media_massa_judul;
		$publikasi_media_massa_media	= $pmm_temp[$i] -> publikasi_media_massa_media;
		$publikasi_media_massa_jenis	= $pmm_temp[$i] -> publikasi_media_massa_jenis;
		$publikasi_media_massa_volume	= $pmm_temp[$i] -> publikasi_media_massa_volume;
		$publikasi_media_massa_nomor	= $pmm_temp[$i] -> publikasi_media_massa_nomor;
		$publikasi_media_massa_halaman	= $pmm_temp[$i] -> publikasi_media_massa_halaman;
		$publikasi_media_massa_url		= $pmm_temp[$i] -> publikasi_media_massa_url;
		$publikasi_media_massa_berkas	= $pmm_temp[$i] -> publikasi_media_massa_berkas;
		
		$body[$i][0] = array('title' => $publikasi_media_massa_id, 	 	'type' => 'id');
		$body[$i][1] = array('title' => $publikasi_media_massa_tahun, 	'type' => 'text');
		$body[$i][2] = array('title' => $publikasi_media_massa_judul, 	'type' => 'text');
		$body[$i][3] = array('title' => $publikasi_media_massa_media, 	'type' => 'text');
		$body[$i][4] = array('title' => $publikasi_media_massa_jenis , 	'type' => 'text');
		$body[$i][5] = array('title' => $publikasi_media_massa_volume , 'type' => 'text');
		$body[$i][6] = array('title' => $publikasi_media_massa_nomor , 	'type' => 'text');
		$body[$i][7] = array('title' => $publikasi_media_massa_halaman ,'type' => 'text');
		$body[$i][8] = array('title' => $publikasi_media_massa_url , 	'type' => 'text');
		$body[$i][9] = array('title' => $publikasi_media_massa_berkas , 'type' => 'file');
		

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

