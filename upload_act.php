<?php
include "admin/config.php";
if ($_POST['buku_kategori']=="28"){
	$buku_author 	 = $_POST['buku_author'];
 	$buku_kategori 	 = $_POST['buku_kategori'];
	$tmp			 = $_FILES['buku_file']['tmp_name'];
	$file			 = $_FILES['buku_file']['name'];
 	$size			 = $_FILES['buku_file']['size'];
 	$type			 = $_FILES['buku_file']['type'];
	
	$uploadir="buku/28/";
	$alamatfile=$uploadir.$file;

 	if(move_uploaded_file($tmp, $alamatfile)){
	mysqli_query($link,"INSERT INTO buku (buku_id,buku_author,buku_kategori,buku_file) VALUES ('','$buku_author','$buku_kategori','$file')");
 		header("Location: admin/upload.php?auth=123131adajjadl131jakdl12");	
 	}else{
		header("Location: admin/upload.php?auth=e2eu8932dh73q3eh822e2qdq");
	}

}else{

	$buku_judul 	 = $_POST['buku_judul'];
	$buku_penulis 	 = $_POST['buku_penulis'];
	$buku_bahasa 	 = $_POST['buku_bahasa'];
 	$tmp			 = $_FILES['buku_file']['tmp_name'];
	$file			 = $_FILES['buku_file']['name'];
 	$size			 = $_FILES['buku_file']['size'];
 	$type			 = $_FILES['buku_file']['type'];

 	$buku_kategori 	 = $_POST['buku_kategori'];
	$buku_id = substr($buku_kategori,0,2);
	$buku_jenis = substr($buku_kategori,3);
	
	if($buku_id){
 		$uploadir="buku/".$buku_id."/";
 	}

	$nama_file=$buku_judul.'.pdf';
 	$alamatfile=$uploadir.$nama_file;

 	if(move_uploaded_file($tmp, $alamatfile)){
 	$sql="INSERT INTO buku (buku_id,buku_judul,buku_penulis,buku_kategori,buku_bahasa,buku_file) VALUES ('','$buku_judul','$buku_penulis','$buku_id','$buku_bahasa','$nama_file')";
	mysqli_query($link,$sql);
 		header("Location: admin/upload.php?auth=123131adajjadl131jakdl12");	
	}else{
		header("Location: admin/upload.php?auth=e2eu8932dh73q3eh822e2qdq");
	}
}
?>