<?php 
	require 'api_conf.php';

	$penulis = json_decode($dale->kueri("SELECT peneliti_nama FROM `peneliti_asing`"));
	echo json_encode($penulis);
 ?>