<?php
	include "config.php";
	$member_id		 = $_POST['member_id'];
	$member_nama 	 = $_POST['member_nama'];
	$member_jk 		 = $_POST['member_jk'];
	$member_ttl 	 = $_POST['member_ttl'];
	$member_alamat 	 = $_POST['member_alamat'];
	$member_email 	 = $_POST['member_email'];
	$member_password = $_POST['member_password'];

	//$description = $_POST['description'];
	$modal=mysqli_query($link,"UPDATE member SET member_nama = '$member_nama',member_jk = '$member_jk',member_ttl = '$member_ttl',member_alamat = '$member_alamat',member_email = '$member_email',member_password = '$member_password'  WHERE member_id = '$member_id'");
	header('location:pengaturan.php');
?>