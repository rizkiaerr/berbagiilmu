<?php
session_start();

  $user = "root";
  $password = "";
  $database = "berbagiilmu";

$con=mysqli_connect('localhost',$user,$password,$database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$member_email='cek1@gmail.com';
$sql="SELECT * FROM member where member_email='$member_email'";
if ($result=mysqli_query($con,$sql))
  {
//  $_SESSION['member_email']=$member_password;
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>