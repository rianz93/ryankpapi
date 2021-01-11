<?php 
	require 'api_conf.php';

	$aktivitas = json_decode($dale->kueri("SELECT * FROM `aktivitas` ORDER BY `aktivitas_waktu` DESC"));
	for($i = 0; $i<sizeof($aktivitas); $i++){
		$datapack[$i] = array(
			"Waktu" 		=> $aktivitas[$i] -> aktivitas_waktu,
			"Aktivitas" 	=> $aktivitas[$i] -> aktivitas_aktivitas,
			"Pelaporan" 	=> $aktivitas[$i] -> aktivitas_pelaporan,
			"Pengguna" 		=> $aktivitas[$i] -> aktivitas_pengguna,
			"Keterangan" 	=> $aktivitas[$i] -> aktivitas_keterangan,
			"_rowVariant" 	=> $aktivitas[$i] -> _rowVariant 
		);
	}
	echo json_encode($datapack);
 ?>
