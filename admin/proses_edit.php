
<?php
	include "config.php";
	$member_id		 = $_POST['member_id'];
	$member_nama 	 = $_POST['member_nama'];
	$member_jk 		 = $_POST['member_jk'];
	$member_ttl		 = $_POST['member_ttl'];
	$member_tglahir	 = $_POST['member_tglahir'];
	$member_alamat 	 = $_POST['member_alamat'];
	$member_username = $_POST['member_username'];
	$member_email 	 = $_POST['member_email'];
	$member_password = $_POST['member_password'];

$modal=mysqli_query($link,"UPDATE member SET member_nama='$member_nama', member_jk='$member_jk', member_ttl='$member_ttl', member_tglahir='$member_tglahir', member_alamat='$member_alamat', member_username='$member_username', member_email='$member_email', member_password='$member_password' WHERE member_id='$member_id'");
	header('location:member.php');
?>