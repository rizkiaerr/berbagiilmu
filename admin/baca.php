<?php
	include 'header.php';
?>

    <!-- Page Content -->
    <div class="container">
		<div class="col-sm-9">
			<h2 class="page-header">
				Baca Buku
			</h2>
			<embed width="800" height="700" src="../buku/Teknologi/buku1.pdf" type="application/pdf"></embed>
		</div>
		<div class="col-sm-3">
			<h2 class="page-header">
				Buku Terbaru
			</h2>
			<?php    
				$im = new Imagick();
				$im->setResolution(300, 300);     //set the resolution of the resulting jpg
				$im->readImage('../buku/Teknologi/buku1.pdf[0]');    //[0] for the first page
				$im->setImageFormat('jpg');
				header('Content-Type: image/jpeg');
				echo $im;
			?>		
		</div>

	</div>
	<!--/container-->

<?php
	include 'footer.php';
?>