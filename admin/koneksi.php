<?php
function koneksi_db()
{
	//pemanggilan msqli connect
	$host="127.0.0.1";
	$username="root";
	$password="";
	$database="berbagiilmu";
	
	//koneksi
	$link = mysqli_connect("localhost","root","","berbagiilmu");
	if(!$link)
	{
		die('Tidak Bisa Melakukan Koneksi :'.mysqli_error());
	}
	
	return $link;
}
?>