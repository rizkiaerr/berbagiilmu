<?php
//include konek database
include 'config.php';
include 'phpmailer/default.php';
ob_start();
  $email_cr = ($_POST['member_email']);
  $real_email = mysqli_real_escape_string($link, $email_cr);
  $query  = "SELECT * FROM member WHERE BINARY member_email = '$real_email'";
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
  $mail->setFrom('berbagilmu.com@gmail.com', 'Developer Berbagi Ilmu');
  //Set an alternative reply-to address
  $mail->addReplyTo('berbagilmu.com@gmail.com', 'Developer Berbagi Ilmu');
  //Set who the message is to be sent to
  $mail->addAddress($real_email);
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
			<td><b>Nama</b><td>: ".$member_nama."</td></td>
		</tr>
		<tr>
			<td><b>Email</b><td>: <b>".$member_email."</b></td></td>
		</tr>
		<tr>
			<td><b>Password Baru</b><td>: <b>".$passwordbaru."</b></td></td>
		</tr>
		</table>
		<br>
		<br>
		<center>
			<p> Atau klik di bawah ini untuk mendapatkan password baru sesuai keinginan Anda</p>
			<b><i><a href=\"localhost/berbagiilmu/admin/password_baru.php?email=".$member_email."\">PASSWORD BARU!!!</a></i></b>
		</center>
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
      header("location: lost-password.php?auth=dadawd2131e1313eqe13edqde");
  }else{
		$password_ganti = $link->real_escape_string(md5($passwordbaru));
		$query2 = mysqli_query($link, "UPDATE member SET member_password = '$password_ganti' WHERE member_email = '$email_cr'");
		if ($query2){
			header("Location: lost-password.php?auth=123131adajjadl131jakdl12");
		}
	}
	
  }else{
     header("location: lost-password.php?auth=2131kjadlaljaipqwepoad1131");
  }
 ?>
