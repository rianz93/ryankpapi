<?php 	
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require('api_conf.php');
	$ubah = $dale->kueri("UPDATE `user` SET user_password = '".$_POST['password']."' WHERE user_id = '".$_POST['user_id']."'");
	if($ubah){
		echo json_encode(array('status' => 'berhasil'));
	}else{
		echo json_encode(array('status' => 'gagal'));
	}
?>