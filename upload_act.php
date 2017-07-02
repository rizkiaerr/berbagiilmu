<?php
include "admin/config.php";
include "Cloudinary/Cloudinary.php";
include "Cloudinary/Uploader.php";
include "Cloudinary/Api.php";

\Cloudinary::config(array( 
             "cloud_name" => "dzupaysdl", 
             "api_key" => "782957816277577", 
             "api_secret" => "DpgQ8pMe2Q9upM6d0bYowtsvG4U" 
         )); 

if ($_POST['buku_kategori']=="29"){
	$buku_author 	 = $_POST['buku_author'];
 	$buku_kategori 	 = $_POST['buku_kategori'];
	$tmp			 = $_FILES['buku_file']['tmp_name'];
	$file			 = $_FILES['buku_file']['name'];
 	$size			 = $_FILES['buku_file']['size'];
 	$type			 = $_FILES['buku_file']['type'];
	
	$uploadir="buku/29/";
	$namafile=substr($file, 0, -4);
	$alamatfile=$uploadir.$file;
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d");
               

 	if(move_uploaded_file($tmp, $alamatfile)){
		mysqli_query($link,"INSERT INTO buku (buku_id,buku_judul,buku_author,buku_kategori,tanggal_upload) VALUES ('','$namafile',$buku_author,'$buku_kategori','$tanggal')");
 		header("Location: admin/upload.php?auth=123131adajjadl131jakdl12");
                //$data=mysqli_fetch_row($res);
 		$query="SELECT buku_id FROM buku ORDER BY buku_id DESC LIMIT 1";
        if ($res = mysqli_query($link, $query)){
                  // Fetch one and one row
	        while ($row=mysqli_fetch_row($res)){
	        	$c_buku1 =$row[0];         
	        }
        }
        
        $c_buku = array("public_id" =>"$c_buku1");
		$absolute_path = realpath("$alamatfile");
		\Cloudinary\Uploader::upload($absolute_path, $c_buku);
 	}else{
		header("Location: admin/upload.php?auth=e2eu8932dh73q3eh822e2qdq");
	}

}else{

	$buku_id		 = $_POST['buku_id'];
	$buku_judul 	 = $_POST['buku_judul'];
	$buku_penulis 	 = $_POST['buku_penulis'];
	$buku_author 	 = $_POST['buku_author'];
	$buku_kategori 	 = $_POST['buku_kategori'];
	$tanggal_upload  = $_POST['tanggal_upload'];
	$buku_bahasa 	 = $_POST['buku_bahasa'];
 	$tmp			 = $_FILES['buku_file']['tmp_name'];
 	$error			 = $_FILES['buku_file']['error'];
	$file			 = $_FILES['buku_file']['name'];
 	$size			 = $_FILES['buku_file']['size'];
 	$type			 = $_FILES['buku_file']['type'];

 	//$buku_kategori 	 = $_POST['buku_kategori'];
	$buku_kat = substr($buku_kategori,0,2);
	$buku_jenis = substr($buku_kategori,3);
	
	if($buku_id){
 		$uploadir="buku/".$buku_kat."/";
 	}

	$nama_file=$buku_judul.".pdf";
 	$alamatfile=$uploadir.$nama_file;
 	//$alamatfile="../buku/".$buku_jenis."/".$buku_judul.".pdf";

 	if(move_uploaded_file($tmp, $alamatfile)){
 		$sql="INSERT INTO buku_admin (buku_id,buku_judul,buku_penulis,buku_author,buku_kategori,buku_bahasa,tanggal_upload) VALUES ('$buku_id','$buku_judul','$buku_penulis',$buku_author,'$buku_kat','$buku_bahasa','$tanggal_upload')";
		mysqli_query($link,$sql);
		//\Cloudinary\Uploader::upload("SinglePageSample.pdf", "public_id" => 'single_page_pdf')
		$c_buku = array("public_id" => $buku_id);
		$absolute_path = realpath("$alamatfile");
		\Cloudinary\Uploader::upload($absolute_path, $c_buku);
 		header("Location: admin/upload.php?auth=123131adajjadl131jakdl12");	
	}else{
		header("Location: admin/upload.php?auth=e2eu8932dh73q3eh822e2qdq&'$alamatfile'");
	}

	//\Cloudinary\Uploader::upload($_FILES["buku_file"]["tmp_name"]);

    

    //$result = \Cloudinary\Uploader::upload($file, $options = array());
       
}
?>