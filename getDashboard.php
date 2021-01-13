<?php 
	require 'api_conf.php';
	$tahun = $_GET['tahun'] == '' ? "IS NOT NULL" : "=".$_GET['tahun'];
	$dosen = $_GET['user_id'] == '' ? "" : "AND `user_id` =".$_GET['user_id'];  

	$peneliti_asing = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `peneliti_asing` WHERE `peneliti_tahun` $tahun "));

	$publikasi_jurnal = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penelitian_jurnal` WHERE `jurnal_tahun_kegiatan` $tahun $dosen"));

	$hibah_ditlitabmas = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `hibah_ditlitabmas` WHERE `hibah_tahun_kegiatan` $tahun $dosen"));

	$hibah_nonditlitabmas = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `hibah_nonditlitabmas` WHERE `hibah_nonditlitabmas_tahun_kegiatan` $tahun $dosen"));

	$buku_ajar = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penelitian_buku_ajar` WHERE `buku_ajar_tahun` $tahun $dosen"));

	$penyelenggaraan_forum = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penyelenggaraan_forum` WHERE `penyelenggaraan_forum_tahun_kegiatan` $tahun "));

	$hki = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `penelitian_hki` WHERE `hki_tahun` $tahun $dosen"));

	$unit_bisnis_hr = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `unit_bisnis_hr` "));

	$produk_tersertifikasi = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `produk_tersertifikasi` WHERE `produk_tersertifikasi_tahun` $tahun"));

	$produk_terstandarisasi = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `produk_terstandarisasi` WHERE `produk_terstandarisasi_tahun` $tahun"));

	$publikasi_jurnal_pkm = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `pkm_jurnal` WHERE `jurnal_tahun_kegiatan` $tahun $dosen"));

	$pkm_mbh = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `pkm_mbh` WHERE `pkm_mbh_tahun` $tahun"));

	$pkm_uhk = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `pkm_uhk` WHERE `pkm_uhk_tahun` $tahun"));

	$publikasi_media = json_decode($dale->kueri("SELECT COUNT(*) as total FROM `publikasi_media_massa` WHERE `publikasi_media_massa_tahun` $tahun $dosen"));


	$datapack = array(	"publikasi_jurnal" 		 => $publikasi_jurnal[0] 	   -> total,
						"peneliti_asing" 		 => $peneliti_asing[0] 		   -> total,
						"hibah_ditlitabmas" 	 => $hibah_ditlitabmas[0] 	   -> total,
						"hibah_nonditlitabmas" 	 => $hibah_nonditlitabmas[0]   -> total,
						"penyelenggaraan_forum"  => $penyelenggaraan_forum[0]  -> total,
						"buku_ajar"				 => $buku_ajar[0]			   -> total,
						"hki"					 => $hki[0]					   -> total,
						"unit_bisnis_hr" 		 => $unit_bisnis_hr[0]		   -> total,
						"produk_tersertifikasi"	 => $produk_tersertifikasi[0]  -> total,
						"produk_terstandarisasi" => $produk_terstandarisasi[0] -> total,
						"pkm_jurnal"			 => $publikasi_jurnal_pkm[0]   -> total,
						"publikasi_media"		 => $publikasi_media[0]		   -> total,
						"pkm_uhk"				 => $pkm_uhk[0] 			   -> total,
						"pkm_mbh"				 => $pkm_mbh[0]  			   -> total);

	echo json_encode($datapack);
 ?>