<?php
include "config.php";

	$member_nama 	 = $_POST['member_nama'];
	$member_jk 		 = $_POST['member_jk'];
	$member_ttl 	 = $_POST['member_ttl'];
	$member_alamat 	 = $_POST['member_alamat'];
	$member_email 	 = $_POST['member_email'];
	$member_password = md5($_POST['member_password']);

mysqli_query($link,"INSERT INTO member (member_nama,member_jk,member_ttl,member_alamat,member_email,member_password) VALUES ('$member_nama','$member_jk','$member_ttl', '$member_alamat', '$member_email', '$member_password')");
header('location:member.php');
?>