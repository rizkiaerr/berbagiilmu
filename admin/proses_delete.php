<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
	include "koneksi.php";
	$modal_id=$_GET['modal_id'];
	$modal=mysqli_query($koneksi,"Delete FROM modal WHERE modal_id='$modal_id'");
	header('location:index.php');
?>