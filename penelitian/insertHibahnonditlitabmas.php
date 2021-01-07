<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

// // MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `hibah_nonditlitabmas`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "HND". + rand(10,99).+($total_row + 1);

if(count($_POST) == 0){ 
	echo json_encode(array('status' =>'gagal'));
}
else{
	if(isset($_POST['id'])){
		$id = $_POST['id'];
	}
	else{
		$id = $new_id;
	}

	
	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `hibah_nonditlitabmas` 
				   SET 	hibah_nonditlitabmas_id 				 	= '".$id."',
				   		hibah_nonditlitabmas_tahun_kegiatan 		= '".$_POST['tahun']."',
				   		hibah_nonditlitabmas_judul_penelitian 		= '".$_POST['judul']."',
				   		hibah_nonditlitabmas_personil_penelitian 	= '".$_POST['personil']."',
				   		hibah_nonditlitabmas_jabatan 		 		= '".$_POST['jabatan']."',
				   		hibah_nonditlitabmas_jenis_penelitian 		= '".$_POST['jenis']."',
				   		hibah_nonditlitabmas_bidang_penelitian 		= '".$_POST['bidang']."',
				   		hibah_nonditlitabmas_sumber_dana 			= '".$_POST['sumber']."',
				   		hibah_nonditlitabmas_institusi 				= '".$_POST['institusi']."',
				   		user_id										= '".$_POST['user_id']."',
				   		hibah_nonditlitabmas_jumlah_dana 	 		= '".$_POST['dana']."'

				   		ON DUPLICATE KEY UPDATE

				   		hibah_nonditlitabmas_tahun_kegiatan 		= '".$_POST['tahun']."',
				   		hibah_nonditlitabmas_judul_penelitian 		= '".$_POST['judul']."',
				   		hibah_nonditlitabmas_personil_penelitian 	= '".$_POST['personil']."',
				   		hibah_nonditlitabmas_jabatan 		 		= '".$_POST['jabatan']."',
				   		hibah_nonditlitabmas_jenis_penelitian 		= '".$_POST['jenis']."',
				   		hibah_nonditlitabmas_bidang_penelitian 		= '".$_POST['bidang']."',
				   		hibah_nonditlitabmas_sumber_dana 			= '".$_POST['sumber']."',
				   		hibah_nonditlitabmas_institusi 				= '".$_POST['institusi']."',
				   		hibah_nonditlitabmas_jumlah_dana 	 		= '".$_POST['dana']."'
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

