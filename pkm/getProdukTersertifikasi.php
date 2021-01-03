<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Nama Produk", "Sertifikasi");
	$body = [];
	if(isset($_GET['id'])){
		$pt_temp = json_decode($dale->kueri("SELECT * FROM `produk_tersertifikasi` where user_data = '".$_GET['id']."'"));
	}else{
		$pt_temp = json_decode($dale->kueri("SELECT * FROM `produk_tersertifikasi`"));
	}
	for($i = 0; $i < sizeof($pt_temp); $i++){
		$produk_tersertifikasi_id 			= $pt_temp[$i] -> produk_tersertifikasi_id;
		$produk_tersertifikasi_tahun		= $pt_temp[$i] -> produk_tersertifikasi_tahun;
		$produk_tersertifikasi_produk		= $pt_temp[$i] -> produk_tersertifikasi_produk;
		$produk_tersertifikasi_sertifikasi	= $pt_temp[$i] -> produk_tersertifikasi_sertifikasi;
		$produk_tersertifikasi_berkas		= $pt_temp[$i] -> produk_tersertifikasi_berkas;
		
		$body[$i][0] = array('title' => $produk_tersertifikasi_id, 	 		'type' => 'id');
		$body[$i][1] = array('title' => $produk_tersertifikasi_tahun, 		'type' => 'text');
		$body[$i][2] = array('title' => $produk_tersertifikasi_produk,		'type' => 'text');
		$body[$i][3] = array('title' => $produk_tersertifikasi_sertifikasi, 'type' => 'text');
		$body[$i][4] = array('title' => $produk_tersertifikasi_berkas , 	'type' => 'file');
		

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

