<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	include "config.php";
	$member_id=$_GET['member_id'];
	$modal=mysqli_query($link,"DELETE FROM member WHERE member_id='$member_id'");
	header('location:member.php');
?>