<?php
include "config.php";
session_start();

if(!empty($_SESSION['admin_email']))
{
	$admin_id	   = $_POST['admin_id'];
	$admin_email   = $_POST['admin_email'];
	$foto          = $_FILES['admin_foto']['name'];
 	$ukuran_file   = $_FILES['admin_foto']['size'];
 	$tipe_file     = $_FILES['admin_foto']['type'];
 	$tmp_file      = $_FILES['admin_foto']['tmp_name'];
 	$uploadir      = 'foto/admin/';
 	$nama_file     = $admin_id.'.png';
	$query  	   = "UPDATE admin SET admin_foto='$nama_file' WHERE admin_id='$admin_id'";
	
	$_SESSION['admin_email']=$admin_email;

}else


if(!empty($_SESSION['member_email']))
{
	$member_id	   = $_POST['member_id'];
	$member_email  = $_POST['member_email'];
	$foto          = $_FILES['member_foto']['name'];
 	$ukuran_file   = $_FILES['member_foto']['size'];
 	$tipe_file     = $_FILES['member_foto']['type'];
 	$tmp_file      = $_FILES['member_foto']['tmp_name'];
 	$uploadir      = 'foto/member/';
 	$nama_file     = $member_id.'.png';
	$query  	   = "UPDATE member SET member_foto='$nama_file' WHERE member_id='$member_id'";
	
	$_SESSION['member_email']=$member_email;

}

 	$alamatfile    = $uploadir.$nama_file;

  	if($tipe_file == "image/jpeg" || $tipe_file == "image/png")
  	{
  		if($ukuran_file <= 1000000)
  		{
    		if(move_uploaded_file($tmp_file, $alamatfile))
    		{
      			$sql    = mysqli_query($link, $query); 

      			if($sql)
      			{
        			header("location: index.php");
      			}else
      			{
        		echo "<script type='text/javascript'>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.')</script>";
      			}
    		}else

    		{
        		echo "<script type='text/javascript'>alert('Maaf, Gambar gagal untuk diupload.')</script>";
    		}

  		}else
  			{
        	echo "<script type='text/javascript'>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB.')</script>";
  			}
	}else
		{
        	echo "<script type='text/javascript'>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.')</script>";
		}

	header('location:index.php'); 



?>