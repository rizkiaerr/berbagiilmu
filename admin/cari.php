<?php
	include 'header.php';
	//include 'koneksi.php';
?>

<!-- Ambil Data -->


    <!-- Page Content -->
    <div class="container">
		<br>
		<h4> Hasil Pencarian </h4>
		<hr>
		<div class="col-sm-12">
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
				<div class="col-sm-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<p align="center">
								<a href="#"><?php echo cl_image_tag("$data_buku[buku_id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></a>
							</p>
						</div>
						<div class="panel-footer">
							<a href="#" align="center"><b><?php echo"$data_buku[buku_judul]"; ?></b></a>
						</div>
					</div>
				</div>
			<?php
				}
			?>
		</div>
	</div>
		
	<div class="container">
		<?php
			$link = koneksi_db();
			$query = "select * from kategori";
			$res = mysqli_query($link, $query);
		?>
		<br>
		<div class="panel panel-info">
			<div class="panel-heading">
				<p> Lainnya </p>
			</div>
			<div class="panel-body">
			<?php
				$no=0;
				while($data=mysqli_fetch_array($res))
				{
					$no++;
			?>	
					
						<li><a href="#"><?php echo"$data[kategori_jenis]"; ?></a>
					
			<?php
					
				}
			?>
			</div>
		</div>
	</div>
	
	<br>
	<hr>
<?php
	include 'footer.php';
?>