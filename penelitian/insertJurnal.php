<?php 

$dir_berkas = "berkas/";
$nama_file_smntara = ($_FILES['berkas']['tmp_name']);
$nama_file = ($_FILES['berkas']['name']);
$uploadFile = move_uploaded_file($nama_file_smntara, $dir_berkas.$nama_file);

if($uploadFile){
	echo "upload berhasil ";
	echo "Link: ".$dir_berkas.$nama_file.$nama_file;
}else{
	echo "upload gagal";
}
 ?>