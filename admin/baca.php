<?php
	include 'header.php';
	//include 'koneksi.php';
?>

    <!-- Page Content -->
    <div class="container">
		<div class="col-sm-9">
			<h2 class="page-header">
				Baca Buku
			</h2>
			<embed width="827" height="800" src="../buku/01/Intro(Pertemuan1).pdf" type="application/pdf"></embed>
			<br>
			<br>
			<hr>
			<div class="navbar-form navbar-left">
				<a href="#">
					<img src="../image/default/profile.png" class="img-circle" width="80" height="80">
					Feki Pangestu Wijaya 
				</a>
			</div>
			
			<div class="navbar-form navbar-right">
				<br>
				<a href="https://plus.google.com/share?url=http://www.kang-cahya.com/p/advertiser-page.html" class="btn btn-danger btn-md">Google+</a>
				<a href="http://twitter.com/share?url=http://www.kang-cahya.com/2015/04/cara-membuat-tombol-share-to-social.html" class="btn btn-info btn-md">Twitter</a>
				<a href="http://www.facebook.com/sharer.php?u=http://www.kang-cahya.com/p/advertiser-page.html" class="btn btn-primary btn-md">Facebook</a>
			</div>
		</div>
		
		<div class="col-sm-3">
			<h2 class="page-header">
				Buku Terbaru 
			</h2>
			<?php
				$link = koneksi_db();
				$query = "select * from buku";
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