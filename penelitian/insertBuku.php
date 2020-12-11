<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("BA".rand(10,99).$_FILES['berkas']['name']);
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."penelitian/".$dir_berkas.$nama_file;
}else{
	$pathFile = $_POST['berkas'];
}
// MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penelitian_buku_ajar`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "BA". + rand(10,99).+($total_row + 1);

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
	$dale-> kueri("INSERT INTO `penelitian_buku_ajar` 
				   SET 	buku_ajar_id 			 	= '".$id."',
				   		buku_ajar_tahun 			= '".$_POST['tahun']."',
				   		buku_ajar_nama_dosen 		= '".$_POST['nama']."',
				   		buku_ajar_NIDN 	 			= '".$_POST['nidn']."',
				   		buku_ajar_judul		 		= '".$_POST['judulBuku']."',
				   		buku_ajar_penerbit 		 	= '".$_POST['penerbit']."',
				   		buku_ajar_ISBN 				= '".$_POST['isbn']."',
				   		buku_ajar_jumlah_halaman 	= '".$_POST['jumlahHalaman']."',
				   		buku_ajar_halaman_cover		= '".$pathFile."'
				
				   		ON DUPLICATE KEY UPDATE
				   		
				   		buku_ajar_tahun 			= '".$_POST['tahun']."',
				   		buku_ajar_nama_dosen 		= '".$_POST['nama']."',
				   		buku_ajar_NIDN 	 			= '".$_POST['nidn']."',
				   		buku_ajar_judul		 		= '".$_POST['judulBuku']."',
				   		buku_ajar_penerbit 		 	= '".$_POST['penerbit']."',
				   		buku_ajar_ISBN 				= '".$_POST['isbn']."',
				   		buku_ajar_jumlah_halaman 	= '".$_POST['jumlahHalaman']."',
				   		buku_ajar_halaman_cover		= '".$pathFile."'
				   			   		
				 	");

	echo json_encode(array('status' => 'berhasil'));
}

?>

