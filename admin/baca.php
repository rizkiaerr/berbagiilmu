<?php
	include 'header.php';
	//include 'koneksi.php';

	$nama=$_GET['nama'];
	$foto=$_GET['foto'];
	$kategori=$_GET['kategori'];
	$judul=$_GET['judul'];
	$judul=urldecode($judul);
	$alamat="../buku/".$kategori."/".$judul.".pdf";
?>

    <!-- Page Content -->
    <div class="container">
		<div class="col-sm-9">
			<h2 class="page-header">
				<?php  echo "$judul";?>
			</h2>
			<embed width="827" height="800" src="<?php  echo "$alamat"?>" type="application/pdf"></embed>
			<br>
			<br>
			<hr>
			<div class="navbar-form navbar-left">
				<a href="#">
					<img src="foto/admin/<?php echo "$foto"; ?>" class="img-circle" width="80" height="80">
					<?php echo "$nama"; ?> 
				</a>
			</div>
			
			<div class="navbar-form navbar-right">
				<br>
				<a href="https://plus.google.com/share?url=http://www.berbagiilmu.com/admin/baca.php?kategori=$kategori&judul=$judul.php" class="btn btn-danger btn-md">Google+</a>
				<a href="http://twitter.com/share?url=http://www.berbagiilmu.com/admin/baca.php?kategori=$kategori&judul=$judul.php" class="btn btn-info btn-md">Twitter</a>
				<a href="http://www.facebook.com/sharer.php?u=http://www.berbagiilmu.com/admin/baca.php?kategori=$kategori&judul=$judul.php" class="btn btn-primary btn-md">Facebook</a>
			</div>
		</div>
		
		<div class="col-sm-3">
			<h2 class="page-header">
				Buku Terbaru 
			</h2>
			<?php
				//$link = koneksi_db();
				$query = "SELECT buku_id, buku_judul FROM buku_admin LIMIT 4";
				$res = mysqli_query($link, $query);
			?>
			<?php
				$no=0;
				while($data_buku=mysqli_fetch_array($res))
				{
			?>
			
			<?php //\Cloudinary\Uploader::upload("C:\\xampp\\htdocs\\Master\\buku\\Olahraga\\book1.pdf", array("public_id" => "olahraga_book_1")); ?>
			<center>
			<a href="#"><?php echo cl_image_tag("$data_buku[buku_id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></a>
			<br>
			<a href="#" align="center"><b><?php echo"$data_buku[buku_judul]"; ?></b></a>
			</center>
			<br>
			<hr>
			<?php
				if($no>=3) {
					break;
				}
				$no++;
				}
			?>
		</div>

	</div>
	<!--/container-->

<?php
	include 'footer.php';
?>