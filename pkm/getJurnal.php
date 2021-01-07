<?php 
	require '../api_conf.php';

	$head = array("Jenis Jurnal", "Tahun","Judul", "Nama Penulis","Jurnal", "Url");
	$body = [];
	$bodyExport = [];

	if(isset($_GET['id'])){
		$pj_temp = json_decode($dale->kueri("SELECT * FROM `pkm_jurnal` WHERE user_id ='".$_GET['id']."' ORDER BY jurnal_tahun_kegiatan DESC"));
	}else{
		$pj_temp = json_decode($dale->kueri("SELECT * FROM `pkm_jurnal` ORDER BY jurnal_tahun_kegiatan DESC"));
	}
	for($i = 0; $i < sizeof($pj_temp); $i++){
		$jurnal_id 					= $pj_temp[$i] -> jurnal_id;
		$jurnal_jenis_jurnal 		= $pj_temp[$i] -> jurnal_jenis_jurnal;
		$jurnal_tahun_kegiatan 		= $pj_temp[$i] -> jurnal_tahun_kegiatan;
		$jurnal_judul_publikasi 	= $pj_temp[$i] -> jurnal_judul_publikasi;
		$jurnal_nama 				= $pj_temp[$i] -> jurnal_nama;
		$jurnal_ISSN 				= $pj_temp[$i] -> jurnal_ISSN;
		$jurnal_volume 				= $pj_temp[$i] -> jurnal_volume;
		$jurnal_halaman 			= $pj_temp[$i] -> jurnal_halaman;
		$jurnal_nomor 				= $pj_temp[$i] -> jurnal_nomor;
		$jurnal_url 				= $pj_temp[$i] -> jurnal_url;
		$jurnal_berkas 				= $pj_temp[$i] -> jurnal_berkas;

		$jurnal = array('nama' => $jurnal_nama, 'issn' => $jurnal_ISSN, 'volume' => $jurnal_volume, 'halaman' => $jurnal_halaman, 'nomor' => $jurnal_nomor);

		$penulis_temp = json_decode($dale->kueri("SELECT penulis_nama_penulis FROM `penulis_pkm` AS a INNER JOIN `pkm_jurnal` AS b ON a.jurnal_id = b.jurnal_id WHERE a.jurnal_id = '".$jurnal_id."' ORDER BY a.penulis_ke ASC "));
		
		$body[$i][0] 	= array('title' => $jurnal_id, 	 			'type' => 'id');
		$body[$i][1] 	= array('title' => $jurnal_jenis_jurnal, 	'type' => 'text');
		$body[$i][2] 	= array('title' => $jurnal_tahun_kegiatan, 	'type' => 'text');
		$body[$i][3] 	= array('title' => $jurnal_judul_publikasi, 'type' => 'text');
		$penulis = [];
		// MENGAMBIL PENULIS
		for ($j=0; $j < sizeof($penulis_temp); $j++) { 
			$penulis[$j] = $penulis_temp[$j] -> penulis_nama_penulis;
		}
		$body[$i][4] 	= array('title' => $penulis, 		'type' => 'penulis');
		$body[$i][5]	= array('title' => $jurnal, 		'type' => 'jurnal' );
		$body[$i][6]	= array('title' => $jurnal_url, 	'type' => 'text' );
		$body[$i][7] 	= array('title' => $jurnal_berkas, 	'type' => 'file');

		$bodyExport[$i][0] = array('title' => $jurnal_jenis_jurnal, 	'type' => 'text');
		$bodyExport[$i][1] = array('title' => $jurnal_tahun_kegiatan, 	'type' => 'text');	
		$bodyExport[$i][2] = array('title' => $jurnal_judul_publikasi, 	'type' => 'text');
		$bodyExport[$i][3] = array('title' => $penulis, 				'type' => 'text');
		$bodyExport[$i][4] = array('title' => $jurnal_nama, 			'type' => 'text');
		$bodyExport[$i][5] = array('title' => $jurnal_ISSN, 			'type' => 'text');
		$bodyExport[$i][6] = array('title' => $jurnal_volume, 			'type' => 'text');
		$bodyExport[$i][7] = array('title' => $jurnal_halaman, 			'type' => 'text');
		$bodyExport[$i][8] = array('title' => $jurnal_nomor, 			'type' => 'text');
		$bodyExport[$i][9] = array('title' => $jurnal_url, 				'type' => 'text');


		$data_pack = array('head' => $head, 'body' => $body, 'bodyExport' => $bodyExport);
		
	}
	echo json_encode($data_pack);
 ?>

