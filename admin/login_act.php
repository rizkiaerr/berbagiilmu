<?php 
session_start();
include 'config.php';
$member_email	=$_POST['member_email'];
$member_password=md5($_POST['member_password']);
$query=mysqli_query($link,"SELECT * FROM member WHERE member_email = '$member_email' AND member_password ='$member_password'");
if(mysqli_num_rows($query)==1){
	$_SESSION['member_email'] = $member_email;
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>