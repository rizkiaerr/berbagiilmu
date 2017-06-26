<?php 
session_start();
include 'config.php';
$email	=$_POST['email'];
$password=$_POST['password'];
//$password=md5($_POST['password']);

$member=mysqli_query($link,"SELECT * FROM member WHERE member_email='$email' AND member_password ='$password'");
$admin=mysqli_query($link,"SELECT * FROM admin WHERE admin_email='$email' AND admin_password ='$password'");


if(mysqli_num_rows($admin)==1){
	$_SESSION['admin_email']=$email;
	header("location:index.php");
}

elseif(mysqli_num_rows($member)==1){
	$_SESSION['member_email']=$email;
	header("location:index.php");
}

else
{
	header("location:index.php?pesan=gagal")or die(mysql_error());
}

/*
//if(mysqli_num_rows($query)==1){
	$_SESSION['member_email'] = $member_email;
	header("location:index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
*/
 ?>