<?php 
	require 'api_conf.php';

	$penulis = json_decode($dale->kueri("SELECT peneliti_nama FROM `peneliti_asing`"));
	$dosen   = json_decode($dale->kueri("SELECT user_nama FROM `user`"));

	$datalist = $penulis;
	$j = 0;
	for($i = sizeof($penulis); $i < (sizeof($penulis) + sizeof($dosen)); $i++){
		$datalist[$i]["peneliti_nama"]  = $dosen[$j] -> user_nama; 
		$datalist[$i]["number"]			= $i+1;
		$j++;
	}
	echo json_encode($datalist);
 ?>