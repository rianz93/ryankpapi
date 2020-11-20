<?php 
require '../api_conf.php';

$head = array(
	"Tahun Kegiatan", 
	"Judul Penelitian", 
	"Personil Penelitian", 
	"Jabatan", 
	"Jenis Penelitian", 
	"Bidang Penelitian",
	"Sumber Dana", 
	"Institusi", 
	"Jumlah Dana",);



$body = [];

$hibah_nonditlitabmas_temp = json_decode($dale->kueri("SELECT * FROM `hibah_nonditlitabmas`"));

for($i = 0; $i < sizeof($hibah_nonditlitabmas_temp); $i++){
	$hibah_nonditlitabmas_id 					= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_id;
	$hibah_nonditlitabmas_tahun_kegiatan 		= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_tahun_kegiatan;
	$hibah_nonditlitabmas_judul_penelitian 		= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_judul_penelitian;
	$hibah_nonditlitabmas_personil_penelitian 	= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_personil_penelitian;
	$hibah_nonditlitabmas_jabatan 				= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_jabatan;
	$hibah_nonditlitabmas_jenis_penelitian 		= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_jenis_penelitian;
	$hibah_nonditlitabmas_bidang_penelitian 	= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_bidang_penelitian;
	$hibah_nonditlitabmas_sumber_dana 			= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_sumber_dana;
	$hibah_nonditlitabmas_institusi 			= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_institusi;
	$hibah_nonditlitabmas_jumlah_dana 			= $hibah_nonditlitabmas_temp[$i] -> hibah_nonditlitabmas_jumlah_dana;

	$body[$i][0] = array('title' => $hibah_nonditlitabmas_id,				 	'type' => 'id');
	$body[$i][1] = array('title' => $hibah_nonditlitabmas_tahun_kegiatan, 	 	'type' => 'text');
	$body[$i][2] = array('title' => $hibah_nonditlitabmas_judul_penelitian, 	'type' => 'text');
	$body[$i][3] = array('title' => $hibah_nonditlitabmas_personil_penelitian, 	'type' => 'text');
	$body[$i][4] = array('title' => $hibah_nonditlitabmas_jabatan, 			 	'type' => 'text');
	$body[$i][5] = array('title' => $hibah_nonditlitabmas_jenis_penelitian, 	'type' => 'text');
	$body[$i][6] = array('title' => $hibah_nonditlitabmas_bidang_penelitian, 	'type' => 'text');
	$body[$i][7] = array('title' => $hibah_nonditlitabmas_sumber_dana, 		 	'type' => 'text');
	$body[$i][8] = array('title' => $hibah_nonditlitabmas_institusi, 			'type' => 'text');
	$body[$i][9] = array('title' => $hibah_nonditlitabmas_jumlah_dana, 		 	'type' => 'int');

	$data_pack = array('head' => $head, 'body' => $body );
}
echo json_encode($data_pack);
 ?>
