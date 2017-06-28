<?php
include "config.php";

	$buku_judul 	 = $_POST['buku_judul'];
	$buku_penulis 	 = $_POST['buku_penulis'];
	$buku_author 	 = $_POST['buku_author'];
	$buku_bahasa 	 = $_POST['buku_bahasa'];
 	$tmp			 = $_FILES['buku_file']['tmp_name'];
	$file			 = $_FILES['buku_file']['name'];
 	$size			 = $_FILES['buku_file']['size'];
 	$type			 = $_FILES['buku_file']['type'];

 	$buku_kategori 	 = $_POST['buku_kategori'];
	$buku_id = substr($buku_kategori,0,2);
	$buku_jenis = substr($buku_kategori,3);
	
	if (!is_dir('Buku/'.$buku_jenis) {
		mkdir('buku/'.$buku_jenis);
 		if($buku_id)){
 			$uploadir="../buku/".$buku_jenis."/";
 		}
 	}

	$nama_file=$buku_judul.'-'.$buku_jenis.'.pdf';
 	$alamatfile=$uploadir.$nama_file;

 	if(move_uploaded_file($tmp, $alamatfile)){
 	$sql="INSERT INTO buku (buku_id,buku_judul,buku_penulis,buku_author,buku_kategori,buku_bahasa,buku_file) VALUES ('','$buku_judul','$buku_penulis','$buku_author','$buku_id','$buku_bahasa','$nama_file')";
	$res=mysqli_query($link,$sql);
 	}

 	if($res){
 		header("Location: upload_admin.php?auth=123131adajjadl131jakdl12");	
	}
 	
?>