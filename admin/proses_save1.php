<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
include "config.php";
	$member_id		 = $_POST['member_id'];
	$member_nama 	 = $_POST['member_nama'];
	$member_ttl 	 = $_POST['member_ttl'];
	$member_alamat 	 = $_POST['member_alamat'];
	$member_email 	 = $_POST['member_email'];
	$member_password = $_POST['member_password'];

mysqli_query($koneksi,"INSERT INTO member (member_nama,member_ttl,member_alamat,member_email,member_password) VALUES ('$member_nama', '$member_ttl', '$member_alamat', '$member_email', '$member_password')");
header('location:member.php');
?>