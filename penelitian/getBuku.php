<?php 
	require '../api_conf.php';

	$head = array("Tahun", "Nama Dosen","NIDN", "Judul", "Penerbit", "ISBN","Halaman","aksi");
	$body = [];

	$buku_temp = json_decode($dale->kueri("SELECT * FROM `penelitian_buku_ajar`"));

	for($i = 0; $i < sizeof($buku_temp); $i++){
		$buku_ajar_id 				= $buku_temp[$i] -> buku_ajar_id;
		$buku_ajar_tahun 			= $buku_temp[$i] -> buku_ajar_tahun;
		$buku_ajar_nama_dosen 		= $buku_temp[$i] -> buku_ajar_nama_dosen;
		$buku_ajar_NIDN 			= $buku_temp[$i] -> buku_ajar_NIDN;
		$buku_ajar_judul 			= $buku_temp[$i] -> buku_ajar_judul;
		$buku_ajar_penerbit 		= $buku_temp[$i] -> buku_ajar_penerbit;
		$buku_ajar_ISBN 			= $buku_temp[$i] -> buku_ajar_ISBN;
		$buku_ajar_jumlah_halaman 	= $buku_temp[$i] -> buku_ajar_jumlah_halaman;
		$buku_ajar_halaman_cover 	= $buku_temp[$i] -> buku_ajar_halaman_cover;
		
		$body[$i][0] = array('title' => $buku_ajar_id, 	 			'type' => 'id');
		$body[$i][1] = array('title' => $buku_ajar_tahun, 			'type' => 'text');
		$body[$i][2] = array('title' => $buku_ajar_nama_dosen, 		'type' => 'text');
		$body[$i][3] = array('title' => $buku_ajar_NIDN , 			'type' => 'text');
		$body[$i][4] = array('title' => $buku_ajar_judul, 			'type' => 'text');
		$body[$i][5] = array('title' => $buku_ajar_penerbit, 		'type' => 'text');
		$body[$i][6] = array('title' => $buku_ajar_ISBN, 			'type' => 'text');
		$body[$i][7] = array('title' => $buku_ajar_jumlah_halaman, 	'type' => 'text');
		$body[$i][8] = array('title' => $buku_ajar_halaman_cover , 	'type' => 'file');
		

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

