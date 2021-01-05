<?php 
	header('Access-Control-Allow-Origin: *');
	require 'api_conf.php';

	$validateLogin = json_decode($dale -> kueri("SELECT * FROM user WHERE user_nick = '".$_POST['username']."'  AND user_password ='".$_POST['password']."'"));
	if(sizeof($validateLogin) > 0){
		$data_pack = array(	'status' 	=> "berhasil", 
							'id' 	 	=> $validateLogin[0] -> user_id,
							'nick'		=> $validateLogin[0] -> user_nick,
						   	'nama' 	 	=> $validateLogin[0] -> user_nama,
						   	'priority' 	=> $validateLogin[0] -> user_priority,
						   	'password'	=> $validateLogin[0] -> user_password);
		echo json_encode($data_pack);

	}else{
		echo json_encode(array('status' => "gagal ".$_POST['password']));
	}
?>