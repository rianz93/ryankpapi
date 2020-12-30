<?php 	
	require('api_conf.php');
	$userTemp = json_decode($dale->kueri("SELECT * FROM user"));
	$userData = [];
	for($i = 0; $i < sizeof($userTemp); $i++){
		$userData[$i]['id'] 	  =  $userTemp[$i]  -> user_id;
		$userData[$i]['nama'] 	  =  $userTemp[$i]  -> user_nama;
		$userData[$i]['nick'] 	  =  $userTemp[$i]  -> user_nick;
		$userData[$i]['password'] =  $userTemp[$i]  -> user_password;
		$userData[$i]['priority'] =  $userTemp[$i]  -> user_priority;  
	}
	echo json_encode(array('userData' => $userData ));
 ?>