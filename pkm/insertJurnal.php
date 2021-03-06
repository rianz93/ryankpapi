<?php 
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');

require '../api_conf.php';

if(isset($_FILES['berkas'])){
	$dir_berkas 		= "berkas/";
	$nama_file_smntara 	= ($_FILES['berkas']['tmp_name']);
	$nama_file 			= ("PKJ".rand(10,99)."jurnal.PDF");
	$uploadFile 		= move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);
	$pathFile 			= $API_ENDPOINT."pkm/".$dir_berkas.$nama_file;
}else{
	$pathFile = $_POST['berkas'];
}
// MENGECEK ROW DAN MEMBUAT ID BERDASARKAN ROW
$check_row 	= json_decode($dale->kueri("SELECT COUNT(*) as total FROM `pkm_jurnal`"));
$total_row 	= $check_row[0] -> total;
$new_id 	= "PKJ". + rand(10,99).+($total_row + 1);

if(count($_POST) == 0){ 
	echo json_encode(array('status' =>'gagal'));
}
else{

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$aktivitas 		= "Mengubah Pelaporan";
		$_rowVariant 	= "warning";

	// MENARIK ID PENULIS BERDASARKAN JURNAL ID
	$penulis_id_temp = json_decode($dale->kueri("SELECT penulis_id FROM penulis_pkm as a INNER JOIN pkm_jurnal as b ON a.jurnal_id = b.jurnal_id WHERE a.jurnal_id = '".$id."' ORDER BY a.penulis_ke ASC"));	
	}
	else{
		$id = $new_id;
		$aktivitas 		= "Menambah Pelaporan";
		$_rowVariant 	= "success";
	}
	if($_POST['user_id']){
		$user_id = $_POST['user_id'];
	}

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= '".$aktivitas."',
				   		aktivitas_pelaporan 	= 'Publikasi Jurnal (pkm)',
				   		aktivitas_pengguna		= '".$_POST['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Judul : '.$_POST['judul']."',
				   		_rowVariant 			= '".$_rowVariant."'
				   	");
	// MEMASUKKAN DATA DALAM DATABASE
	$dale-> kueri("INSERT INTO `pkm_jurnal` 
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
				   		user_id					= '".$user_id."',
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
		if(isset($_POST['id'])){
			if(isset($penulis_id_temp[$i] -> penulis_id)){
				$penulis_id = $penulis_id_temp[$i] -> penulis_id;
			}else{
				$penulis_id = "PS". + rand(10,99).+$i;
			}

		}else{ 
			$penulis_id = "PS". + rand(10,99).+$i;
		}

		$dale->kueri("INSERT INTO `penulis_pkm`
					  SET penulis_id 			= '".$penulis_id."',
					  	  jurnal_id 			= '".$id."',
					  	  penulis_nama_penulis 	= '".$_POST['penulis'.+$i]."',
					  	  penulis_ke 			= '".($i+1)."'

					  	  ON DUPLICATE KEY UPDATE

					  	  jurnal_id 			= '".$id."',
					  	  penulis_nama_penulis 	= '".$_POST['penulis'.+$i]."',
					  	  penulis_ke 			= '".($i+1)."'

					  	  ");
	}
	if(isset($_POST['id'])){
		for($i = $_POST['totalPenulis']; $i < sizeof($penulis_id_temp); $i++){
			$dale->kueri("DELETE FROM penulis_pkm WHERE penulis_id = '".$penulis_id_temp[$i] -> penulis_id."'");
		}
	}
	echo json_encode(array('status' => 'berhasil'));
}

?>

