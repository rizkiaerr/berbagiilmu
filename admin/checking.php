<?php
//include konek database
include 'config.php';
include 'phpmailer/default.php';
ob_start();
  $email_cr = ($_POST['lost_email']);
  $injeksi_email = mysqli_real_escape_string($link, $email_cr);
  $query  = "SELECT * FROM member WHERE BINARY email = '$injeksi_email'";
  $login  = mysqli_query($link, $query);
  $ketemu = mysqli_num_rows($login);
  if ($ketemu == 1){
    $cetak     = mysqli_fetch_array($login);
    extract($cetak);
    //password baru
    $pass="129FAasdsk25kwBjakjDlff"; $panjang='8'; $len=strlen($pass);
	$start=$len-$panjang; $xx=rand('0',$start);
	$yy=str_shuffle($pass);
	$passwordbaru=substr($yy, $xx, $panjang);
	//*************************PHP MAILER*************************************
  //Set who the message is to be sent from
  $mail->setFrom('angga3399@gmail.com', 'Developer Berbagi Ilmu');
  //Set an alternative reply-to address
  $mail->addReplyTo('angga3399@gmail.com', 'Developer Berbagi Ilmu');
  //Set who the message is to be sent to
  $mail->addAddress($injeksi_email);
  //Set the subject line
  $mail->Subject = "Permintaan Password Baru";
	// isi pesan email disertai password
	$pesan_notif = "
	<html>
	<style>
	
	.header{
		border-radius:3px;
		padding: 6px;
		text-align:center;
		color: #fff;
	}

	.doff{
		color:#555;
	}
	</style>
	<body>
	
		<div class=\"header\">
			<h3>Developer Berbagi Ilmu<br></h3>
		</div><br>
		Kami telah mengatur ulang password Anda, Berikut Data beserta password baru Anda :<br><br>
		<table>
		<tr>
			<td><b>Email</b><td>: ".$email."</td></td>
		</tr>
		<tr>
			<td><b>Username</b><td>: <b>".$username."</b></td></td>
		</tr>
		<tr>
			<td><b>Password Baru</b><td>: <b>".$passwordbaru."</b></td></td>
		</tr>
		</table>
			
			<p><br><br>
	    Developer Berbagi Ilmu<br>
			</p>
			<center>
			<small>
			<p class=\"doff\">All Rights Reserved &copy; ".date("Y")." Berbagi Ilmu.<br>
			</p>
			</small>
			</center>
   	
	</body>
	</html>";
	$mail->msgHTML($pesan_notif, dirname(__FILE__));
  //Replace the plain text body with one created manually
  $mail->AltBody = 'This is a plain-text message body';
  //Attach an image file
  // $mail->addAttachment('images/phpmailer_mini.png');
  //send the message, check for errors
  if (!$mail->send()) {
      //  echo "Mailer Error: " . $mail->ErrorInfo;
      header("location: index.php");
  }else{
		$password_ganti = $conn->real_escape_string(md5($passwordbaru));
		$query2 = mysqli_query($conn, "UPDATE member SET pass = '$password_ganti' WHERE email = '$email_cr'");
		if ($query2){
			header("Location: index.php");
		}else{
				header("location: index.php");
		}
	}
	
  }else{
     header("location: index.php");
  }
 ?>
