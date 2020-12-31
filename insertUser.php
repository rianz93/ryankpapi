<?php 	
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require('api_conf.php');
$status = "berhasil";
$validUsername = json_decode($dale->kueri("SELECT * FROM user where user_nick = '".$_POST['namaPengguna']."'"));

if($_POST['id'] == null || $_POST['id'] == "null"){
	if($validUsername){
		$status = "duplicate";
		goto end;
	}
}	

$user_id  = isset($_POST['id']) ? $_POST['id'] : '';
// $password = md5($_POST['password']);
$password = $_POST['password'] == "null" ? $validUsername[0] -> user_password : md5($_POST["password"]) ;

$dale->kueri("INSERT INTO `user` 
			  	SET 
			  		user_id		   = '".$user_id."',
			  	  	user_nama 	   = '".$_POST['namaLengkap']."',
			  	  	user_nick 	   = '".$_POST['namaPengguna']."',
			  	  	user_password  = '".$password."',
			  	  	user_priority  = '".$_POST['tingkatPengguna']."'

			  	  	ON DUPLICATE KEY UPDATE

			  	  	user_nama 	   = '".$_POST['namaLengkap']."',
			  	  	user_nick 	   = '".$_POST['namaPengguna']."',
			  	  	user_password  = '".$password."',
			  	  	user_priority  = '".$_POST['tingkatPengguna']."'");
end:
echo json_encode(array('status' => $status));
?>