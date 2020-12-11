<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("PJ".rand(10,99).$_FILES['berkas']['name']);
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."penelitian/".$dir_berkas.$nama_file;
}else{
	$pathFile = $_POST['berkas'];
}
// MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penelitian_jurnal`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "PJ". + rand(10,99).+($total_row + 1);

if(!isset($_POST['penulisId'])){
	$penulis_id = "PS". + rand(10,99);
}

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
	$dale-> kueri("INSERT INTO `penelitian_jurnal` 
				   SET 	jurnal_id 			 	= '".$id."',
				   		jurnal_jenis_jurnal 	= '".$_POST['jenisJurnal']."',
				   		jurnal_tahun_kegiatan 	= '".$_POST['tahun']."',
				   		jurnal_judul_publikasi 	= '".$_POST['judul']."',
				   		jurnal_nama 		 	= '".$_POST['namaJurnal']."',
				   		jurnal_ISSN 		 	= '".$_POST['issn']."',
				   		jurnal_volume 			= '".$_POST['volume']."',
				   		jurnal_nomor 			= '".$_POST['nomor']."',
				   		jurnal_halaman 			= '".$_POST['halaman']."',
				   		jurnal_url 				= '".$_POST['url']."',
				   		jurnal_berkas 			= '".$pathFile."'

				   		ON DUPLICATE KEY UPDATE
				   		
				   		jurnal_jenis_jurnal 	= '".$_POST['jenisJurnal']."',
				   		jurnal_tahun_kegiatan 	= '".$_POST['tahun']."',
				   		jurnal_judul_publikasi 	= '".$_POST['judul']."',
				   		jurnal_nama 		 	= '".$_POST['namaJurnal']."',
				   		jurnal_ISSN 		 	= '".$_POST['issn']."',
				   		jurnal_volume 			= '".$_POST['volume']."',
				   		jurnal_nomor 			= '".$_POST['nomor']."',
				   		jurnal_halaman 			= '".$_POST['halaman']."',
				   		jurnal_url 				= '".$_POST['url']."',
				   		jurnal_berkas 			= '".$pathFile."'		   		
				 	");

	for($i = 0; $i < $_POST['totalPenulis']; $i++){
		$dale->kueri("INSERT INTO `penulis`
					  SET penulis_id = '".$penulis_id.$i."',
					  	  jurnal_id  = '".$id."',
					  	  penulis_nama_penulis = '".$_POST['penulis'.+$i]."',
					  	  penulis_ke = '".($i+1)."'");
	}

	echo json_encode(array('status' => 'berhasil'));
}

?>

