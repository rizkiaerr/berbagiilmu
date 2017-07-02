<?php
//	include 'header.php';
//	include 'config.php';
session_start();
  if((!empty($_SESSION['admin_email'])))
    {
?>
<html>
<head>
	<title>Recovery Database</title>
</title>
</title>
<body>


<fieldset>
<legend><h1>Restore Data</h1></legend>

<form enctype="multipart/form-data" action="restore.php" method="post">

	<table align="center">
	<tr><td>File Backup Database (*.sql) <input type="file" name="datafile" size="30" id="gambar" /></td></tr>
	<tr><td><input type="submit" onClick="return confirm('Apakah Anda yakin akan restore database?')" name="restore" value="Restore Database" /></td>
	</tr>
	</table>
</form>


<?php
if(isset($_POST['restore'])){
	$host		= "localhost";
	$user 		= "root";
	$password 	= "";
	$database 	= "berbagiilmu";

	$link = mysqli_connect($host,$user,$password,$database);
	//$koneksi=mysqli_connect("localhost","root","");

	//mysql_select_db("hospital",$koneksi);
	
//	include 'config.php';
	$nama_file=$_FILES['datafile']['name'];
	$ukuran=$_FILES['datafile']['size'];
	
	//periksa jika data yang dimasukan belum lengkap
	if ($nama_file=="")
	{
		echo "Fatal Error";
	}else{
		//definisikan variabel file dan alamat file
		$uploaddir='./restore/';
		$alamatfile=$uploaddir.$nama_file;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile))
		{
			
			$filename = './restore/'.$nama_file.'';
			
			// Temporary variable, used to store current query
			$templine = '';
			// Read in entire file
			$lines = file($filename);
			// Loop through each line
			foreach ($lines as $line)
			{
				// Skip it if it's a comment
				if (substr($line, 0, 2) == '--' || $line == '')
					continue;
			 
				// Add this line to the current segment
				$templine .= $line;
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($line), -1, 1) == ';')
				{
					// Perform the query
					mysqli_query($link,$templine);// or print('Error performing query \'<strong>' . $templine . '<br /><br />');
					// Reset temp variable to empty
					$templine = '';
				}
			}
			echo "<center>Berhasil Restore Database, silahkan di cek.</center>";
		
		}else{
			//jika gagal
			echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
		}	
	}

}else{
	unset($_POST['restore']);
}
?>

</body>
</head>
<?php
 include 'footer.php';
}else
  header("location:index.php");
?>
