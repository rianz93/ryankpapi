<?php 	
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');
require 'api_conf.php';

$valueId 		= $_GET['id'];
$namaTable 		= $_GET['namaTable'];
$namaId 		= $_GET['namaId'];

if($namaTable == "peneliti_asing"){
	$keyValue = json_decode($dale->kueri("SELECT `peneliti_nama` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> peneliti_nama;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Peneliti Asing',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Peneliti : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "penelitian_jurnal"){
	$keyValue = json_decode($dale->kueri("SELECT `jurnal_judul_publikasi` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> jurnal_judul_publikasi;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Publikasi Jurnal (Penelitian)',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama judul : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "pkm_jurnal"){
	$keyValue = json_decode($dale->kueri("SELECT `jurnal_judul_publikasi` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> jurnal_judul_publikasi;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Publikasi Jurnal (pkm)',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama judul : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "hibah_ditlitabmas"){
	$keyValue = json_decode($dale->kueri("SELECT `hibah_judul_penelitian` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> hibah_judul_penelitian;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Hibah Ditlitabmas',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama judul : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "hibah_nonditlitabmas"){
	$keyValue = json_decode($dale->kueri("SELECT `hibah_nonditlitabmas_judul_penelitian` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> hibah_nonditlitabmas_judul_penelitian;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Hibah Nonditlitabmas',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama judul : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "penelitian_hki"){
	$keyValue = json_decode($dale->kueri("SELECT `hki_judul` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> hki_judul;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Hak Kekayaan Intelektual (Penelitian)',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama judul : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "penyelenggaraan_forum"){
	$keyValue = json_decode($dale->kueri("SELECT `penyelenggaraan_forum_nama_kegiatan` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> penyelenggaraan_forum_nama_kegiatan;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Penyelenggaraan Forum',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama judul : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "pkm_mbh"){
	$keyValue = json_decode($dale->kueri("SELECT `pkm_mbh_nama` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> pkm_mbh_nama;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Mitra Berbadan Hukum',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama mitra : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "pkm_uhk"){
	$keyValue = json_decode($dale->kueri("SELECT `pkm_uhk_unit` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> pkm_uhk_unit;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Unit Usaha Kampus',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama unit usaha : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "produk_tersertifikasi"){
	$keyValue = json_decode($dale->kueri("SELECT `produk_tersertfikasi_produk` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> produk_tersertfikasi_produk;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Produk Tersertifikasi',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama produk : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "produk_terstandarisasi"){
	$keyValue = json_decode($dale->kueri("SELECT `produk_terstandarisasi_produk` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> produk_terstandarisasi_produk;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Produk Terstandarisasi',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama produk : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "unit_bisnis_hr"){
	$keyValue = json_decode($dale->kueri("SELECT `unit_bisnis_hr_nama` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> unit_bisnis_hr_nama;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Unit Bisnis Hasil Riset',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Unit Bisnis : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "publikasi_media_massa"){
	$keyValue = json_decode($dale->kueri("SELECT `publikasi_media_massa_judul` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> publikasi_media_massa_judul;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Publikasi Media Massa',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Judul : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}
else if($namaTable == "penelitian_buku_ajar"){
	$keyValue = json_decode($dale->kueri("SELECT `buku_ajar_judul` FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'"));
	$keterangan = $keyValue[0] -> buku_ajar_judul;

	$dale-> kueri("INSERT INTO `aktivitas` 
				   SET 	aktivitas_aktivitas 	= 'Menghapus Pelaporan',
				   		aktivitas_pelaporan 	= 'Buku Ajar (penelitian)',
				   		aktivitas_pengguna		= '".$_GET['user_name']."',
				   		aktivitas_keterangan 	= '".'Nama Judul Buku : '.$keterangan."',
				   		_rowVariant 			= 'danger'
				   	");
}

// $dale->kueri("DELETE FROM ".$namaTable." WHERE ".$namaId." = '".$valueId."'");

echo json_encode(array('status'=>'berhasil'));
 ?>
