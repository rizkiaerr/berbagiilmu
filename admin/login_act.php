<?php 
session_start();
include 'config.php';
$member_email	=$_POST['member_email'];
$member_password=$_POST['member_password'];
//$pas=md5($pass);

$query=mysqli_query($link,"SELECT * from member where member_email='$member_email' and member_password='$member_password'");
if(mysqli_num_rows($query)==1){
	$_SESSION['member_email']=$member_password;
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>