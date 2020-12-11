<?php 
	require '../api_conf.php';

	$head = array("Jenis Jurnal", "Tahun","Judul", "Nama Penulis","Jurnal", "Url");
	$body = [];

	$pj_temp = json_decode($dale->kueri("SELECT * FROM `penelitian_jurnal`"));

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

		$penulis_temp = json_decode($dale->kueri("SELECT penulis_nama_penulis FROM `penulis` AS a INNER JOIN `penelitian_jurnal` AS b ON a.jurnal_id = b.jurnal_id WHERE a.jurnal_id = '".$jurnal_id."' ORDER BY a.penulis_nama_penulis ASC "));
		
		$body[$i][0] 	= array('title' => $jurnal_id, 	 			'type' => 'id');
		$body[$i][1] 	= array('title' => $jurnal_jenis_jurnal, 	'type' => 'text');
		$body[$i][2] 	= array('title' => $jurnal_tahun_kegiatan, 	'type' => 'text');
		$body[$i][3] 	= array('title' => $jurnal_judul_publikasi, 'type' => 'text');
		// MENGAMBIL PENULIS
		for ($j=0; $j < sizeof($penulis_temp); $j++) { 
			$penulis[$j] = $penulis_temp[$j] -> penulis_nama_penulis;
		}
		$body[$i][4] 	= array('title' => $penulis, 		'type' => 'penulis');
		$body[$i][5]	= array('title' => $jurnal, 		'type' => 'jurnal' );
		$body[$i][6]	= array('title' => $jurnal_url, 	'type' => 'text' );
		$body[$i][7] 	= array('title' => $jurnal_berkas, 	'type' => 'file');

		$data_pack = array('head' => $head, 'body' => $body);
		
	}
	echo json_encode($data_pack);
 ?>

