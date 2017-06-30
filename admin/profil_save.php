<?php
include "config.php";
session_start();

if(!empty($_SESSION['admin_email']))
{
	$admin_id		 = $_POST['admin_id'];
	$admin_nama 	 = $_POST['admin_nama'];
	$admin_jk 		 = $_POST['admin_jk'];
	$admin_ttl		 = $_POST['admin_ttl'];
	$admin_tglahir	 = $_POST['admin_tglahir'];
	$admin_alamat 	 = $_POST['admin_alamat'];
	$admin_username  = $_POST['admin_username'];
	$admin_tlp 	 	 = $_POST['admin_tlp'];
	$admin_email 	 = $_POST['admin_email'];
	

mysqli_query($link,"UPDATE admin SET admin_nama='$admin_nama', admin_jk='$admin_jk', admin_ttl='$admin_ttl', admin_tglahir='$admin_tglahir', admin_alamat='$admin_alamat', admin_username='$admin_username', admin_tlp='$admin_tlp', admin_email='$admin_email'  WHERE admin_id='$admin_id'");

	$_SESSION['admin_email']=$admin_email;

}else

if(!empty($_SESSION['member_email']))
{
	$member_id		 = $_POST['member_id'];
	$member_nama 	 = $_POST['member_nama'];
	$member_jk 		 = $_POST['member_jk'];
	$member_ttl		 = $_POST['member_ttl'];
	$member_tglahir	 = $_POST['member_tglahir'];
	$member_alamat 	 = $_POST['member_alamat'];
	$member_username = $_POST['member_username'];
	$member_tlp 	 = $_POST['member_tlp'];
	$member_email 	 = $_POST['member_email'];

mysqli_query($link,"UPDATE member SET member_nama='$member_nama', member_jk='$member_jk', member_ttl='$member_ttl', member_tglahir='$member_tglahir', member_alamat='$member_alamat', member_username='$member_username', member_tlp='$member_tlp', member_email='$member_email'  WHERE member_id='$member_id'");

	$_SESSION['member_email']=$member_email;

}

header('location:profil.php'); 

?>