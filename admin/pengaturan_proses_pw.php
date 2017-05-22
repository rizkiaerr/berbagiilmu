<?php
	include "config.php";
	$member_id		 = $_POST['member_id'];
	$member_password = $_POST['member_password_baru'];
	//$description = $_POST['description'];
	$modal=mysqli_query($link,"UPDATE member SET member_password = '$member_password'  WHERE member_id = '$member_id'");
	header('location:pengaturan.php');
?>