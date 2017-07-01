<?php
include "config.php";
//save untuk Buku
if($_GET['save']=="buku_admin"){
	$buku_id		 = $_POST['buku_id'];
	$buku_judul 	 = $_POST['buku_judul'];
	$buku_penulis	 = $_POST['buku_penulis'];
	$buku_bahasa	 = $_POST['buku_bahasa'];

mysqli_query($link,"UPDATE buku_admin SET buku_judul='$buku_judul', buku_penulis='$buku_penulis', buku_bahasa='$buku_bahasa' WHERE buku_id='$buku_id'");
header('location:buku.php');
}elseif($_GET['save']=="buku_member"){
	$buku_id		 = $_POST['buku_id'];
	$buku_judul 	 = $_POST['buku_judul'];

mysqli_query($link,"UPDATE buku SET buku_judul='$buku_judul' WHERE buku_id='$buku_id'");
header('location:buku.php');
}else{

	$member_id		 = $_POST['member_id'];
	$member_nama 	 = $_POST['member_nama'];
	$member_jk 		 = $_POST['member_jk'];
	$member_ttl		 = $_POST['member_ttl'];
	$member_tglahir	 = $_POST['member_tglahir'];
	$member_alamat 	 = $_POST['member_alamat'];
	$member_username = $_POST['member_username'];
	$member_tlp 	 = $_POST['member_tlp'];
	$member_email 	 = $_POST['member_email'];
	$member_password = md5($_POST['member_password']);

mysqli_query($link,"INSERT INTO member(member_id, member_nama, member_jk, member_ttl, member_tglahir, member_alamat, member_username, member_tlp, member_email, member_password) VALUES
		     ('$member_id','$member_nama','$member_jk','$member_ttl','$member_tglahir','$member_alamat','$member_username','$member_tlp','$member_email','$member_password')");

header('location:index.php');
}
?>
