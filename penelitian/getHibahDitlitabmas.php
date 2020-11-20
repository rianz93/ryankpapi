<?php 
require '../api_conf.php';

$head = array("Tahun Kegiatan","Judul Penelitian", "Personil", "Jabatan", "Bidang Penelitian", "Dana");
$body = [];

$hibah_ditlitabmas_temp = json_decode($dale->kueri("SELECT * FROM `hibah_ditlitabmas`"));

for($i= 0; $i < sizeof($hibah_ditlitabmas_temp); $i++){
	$hibah_ditlitabmas_id 					= $hibah_ditlitabmas_temp[$i] -> hibah_id;
	$hibah_ditlitabmas_tahun 				= $hibah_ditlitabmas_temp[$i] -> hibah_tahun_kegiatan;
	$hibah_ditlitabmas_judul_penelitian 	= $hibah_ditlitabmas_temp[$i] -> hibah_judul_penelitian;
	$hibah_ditlitabmas_personil_penelitian 	= $hibah_ditlitabmas_temp[$i] -> hibah_personil_penelitian;
	$hibah_ditlitabmas_jabatan 				= $hibah_ditlitabmas_temp[$i] -> hibah_jabatan;
	$hibah_ditlitabmas_bidang_penelitian 	= $hibah_ditlitabmas_temp[$i] -> hibah_bidang_penelitian;
	$hibah_ditlitabmas_dana 				= $hibah_ditlitabmas_temp[$i] -> hibah_dana;

	$body[$i][0] = array('title' => $hibah_ditlitabmas_id, 						'type' => 'id');
	$body[$i][1] = array('title' => $hibah_ditlitabmas_tahun, 					'type' => 'text');
	$body[$i][2] = array('title' => $hibah_ditlitabmas_judul_penelitian, 		'type' => 'text');
	$body[$i][3] = array('title' => $hibah_ditlitabmas_personil_penelitian, 	'type' => 'text');
	$body[$i][4] = array('title' => $hibah_ditlitabmas_jabatan, 				'type' => 'text');
	$body[$i][5] = array('title' => $hibah_ditlitabmas_bidang_penelitian, 		'type' => 'text');
	$body[$i][6] = array('title' => $hibah_ditlitabmas_dana,					'type' => 'int');
	
	$data_pack = array('head' => $head, 'body' => $body);
 	
}
 echo json_encode($data_pack);

 ?>
