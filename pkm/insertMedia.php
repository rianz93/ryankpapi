<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("PM".rand(10,99).$_FILES['berkas']['name']);
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."pkm/".$dir_berkas.$nama_file;
}else{
	$pathFile = $_POST['berkas'];
}
// MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `publikasi_media_massa`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "PM". + rand(10,99).+($total_row + 1);

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
	$dale-> kueri("INSERT INTO `publikasi_media_massa` 
				   SET 	publikasi_media_massa_id 		= '".$id."',
				   		publikasi_media_massa_tahun 	= '".$_POST['tahun']."',
				   		publikasi_media_massa_judul		= '".$_POST['judul']."',
				   		publikasi_media_massa_media 	= '".$_POST['media']."',
				   		publikasi_media_massa_jenis	 	= '".$_POST['jenis']."',
				   		publikasi_media_massa_volume	= '".$_POST['volume']."',
				   		publikasi_media_massa_nomor		= '".$_POST['nomor']."',
				   		publikasi_media_massa_halaman	= '".$_POST['halaman']."',
				   		publikasi_media_massa_url		= '".$_POST['url']."',
				   		user_id							= '".$_POST['user_id']."',
				   		publikasi_media_massa_berkas 	= '".$pathFile."'

				   		ON DUPLICATE KEY UPDATE
				   		
				   		publikasi_media_massa_tahun 	= '".$_POST['tahun']."',
				   		publikasi_media_massa_judul		= '".$_POST['judul']."',
				   		publikasi_media_massa_media 	= '".$_POST['media']."',
				   		publikasi_media_massa_jenis	 	= '".$_POST['jenis']."',
				   		publikasi_media_massa_volume	= '".$_POST['volume']."',
				   		publikasi_media_massa_nomor		= '".$_POST['nomor']."',
				   		publikasi_media_massa_halaman	= '".$_POST['halaman']."',
				   		publikasi_media_massa_url		= '".$_POST['url']."',
				   		publikasi_media_massa_berkas 	= '".$pathFile."'				   		
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

