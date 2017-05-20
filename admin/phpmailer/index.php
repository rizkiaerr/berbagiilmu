<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
// $mail->Host = 'smtp.gmail.com';
$mail->Host = 'web.unikom.ac.id';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "contact@himaif.unikom.ac.id";

//Password to use for SMTP authentication
$mail->Password = "Kmzwa87awaa";

//Set who the message is to be sent from
$mail->setFrom('contact@himaif.unikom.ac.id', 'Contact HMIF');

//Set an alternative reply-to address
$mail->addReplyTo('contact@himaif.unikom.ac.id', 'Contact HMIF');

//Set who the message is to be sent to
$mail->addAddress('dikyhasan155@gmail.com');

//Set the subject line
$mail->Subject = 'Testing';

$pesan =
"
<html>
	<style>
	.layout{
		margin-left: auto;
		margin-right: auto;
		width: 50%;
	}
	.header{
		background-color: #022D41;
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
	<div class=\"layout\">
		<div class=\"header\">
			<h3>Developer HMIF<br><small>Universitas Komputer Indonesia</small></h3>
		</div><br>
		Kami telah mengatur ulang password Anda, Berikut Data beserta password baru Anda :<br><br>
		<table>
		<tr>
			<td><b>Nama Lengkap</b><td>: ".$nama_lengkap."</td></td>
		</tr>
		<tr>
			<td><b>Email</b><td>: ".$email."</td></td>
		</tr>
		<tr>
			<td><b>Divisi</b><td>: ".$divisi."</td></td>
		</tr>
		<tr>
			<td><b>Username</b><td>: <b>".$username."</b></td></td>
		</tr>
		<tr>
			<td><b>Password Baru</b><td>: <b>".$passwordbaru."</b></td></td>
		</tr>
		</table>
			<p>Anda dapat login kembali dengan password baru Anda ke <a href=\"http://himaif.unikom.ac.id/wp-admin/\" target=\"_blank\" style=\"text-decoration:none;font-weight:bold;\">Website Administrator</a>.</p>
			<p><br><br>
	    Developer HMIF<br>
			Universitas Komputer Indonesia
			</p>
			<center>
			<small>
			<p class=\"doff\">Allrights reserved &copy; ".date("Y")." HMIF UNIKOM.<br>
			<a href=\"http://www.himaif.unikom.ac.id/\" target=\"_blank\" style=\"text-decoration:none;\">Website Utama</a></p>
			</small>
			</center>
   	</div>
	</body>
	</html>
";


//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('content-lupa-password.php'), dirname(__FILE__));
$mail->msgHTML($pesan, dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>
