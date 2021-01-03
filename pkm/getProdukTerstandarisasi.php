<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Nama Produk", "Standarisasi");
	$body = [];
	if(isset($_GET['id'])){
		$pt_temp = json_decode($dale->kueri("SELECT * FROM `produk_terstandarisasi` where user_data = '".$_GET['id']."'"));
	}else{
		$pt_temp = json_decode($dale->kueri("SELECT * FROM `produk_terstandarisasi`"));
	}
	for($i = 0; $i < sizeof($pt_temp); $i++){
		$produk_terstandarisasi_id 			= $pt_temp[$i] -> produk_terstandarisasi_id;
		$produk_terstandarisasi_tahun			= $pt_temp[$i] -> produk_terstandarisasi_tahun;
		$produk_terstandarisasi_produk			= $pt_temp[$i] -> produk_terstandarisasi_produk;
		$produk_terstandarisasi_standarisasi	= $pt_temp[$i] -> produk_terstandarisasi_standarisasi;
		$produk_terstandarisasi_berkas			= $pt_temp[$i] -> produk_terstandarisasi_berkas;
		
		$body[$i][0] = array('title' => $produk_terstandarisasi_id, 	 		'type' => 'id');
		$body[$i][1] = array('title' => $produk_terstandarisasi_tahun, 		'type' => 'text');
		$body[$i][2] = array('title' => $produk_terstandarisasi_produk,		'type' => 'text');
		$body[$i][3] = array('title' => $produk_terstandarisasi_standarisasi, 	'type' => 'text');
		$body[$i][4] = array('title' => $produk_terstandarisasi_berkas , 		'type' => 'file');
		

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

