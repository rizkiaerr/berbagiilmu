<?php 
include 'config.php';
	$email= $_POST['member_email'];
	$password_ganti= md5($_POST['password_baru']);

	$query2 = mysqli_query($link, "UPDATE member SET member_password = '$password_ganti' WHERE member_email = '$email'");
		if ($query2){
			header("Location: password_baru.php?auth=123131adajjadl131jakdl12");	
		}else
		{
			header("Location: password_baru.php?auth=e2eu8932dh73q3eh822e2qdq");
		}

?>