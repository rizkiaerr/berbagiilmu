<?php
	include 'header.php';
	//include 'koneksi.php';

	if(empty($_POST['txt_cari'])){
      $isi_cari = $_GET['txt_cari'];
    }      
    else $isi_cari = $_POST['txt_cari']; 
?>

<!-- Ambil Data -->


    <!-- Page Content -->
    <div class="container">
		<br>
		<h4> Hasil Pencarian <?php echo $isi_cari; ?></h4>
		<hr>
		<div class="col-sm-12">
			<?php
				//$link = koneksi_db();
				if(empty($_POST['txt_cari'])){
			    	$query = "select * from buku where buku_kategori = (select kategori_id from kategori where kategori_jenis='".$isi_cari."')";
			    } else {
			    	$query = "select * from buku where buku_judul LIKE '%".$isi_cari."%' or buku_penulis LIKE '%".$isi_cari."%'";
			    }
				
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
								<a href="baca.php?kategori=<?php echo"$data_buku[buku_kategori]" ?>&judul=<?php echo"$data_buku[buku_judul]" ?>"><?php echo cl_image_tag("$data_buku[buku_id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></a>
							</p>
						</div>
						<div class="panel-footer">
							<a href="baca.php?kategori=<?php echo"$data_buku[buku_kategori]" ?>&judul=<?php echo"$data_buku[buku_judul]" ?>" align="center"><b><?php echo"$data_buku[buku_judul]"; ?></b></a>
						</div>
					</div>
				</div>
			<?php
				}
			?>
		</div>
	</div>
	
	<br>
	<hr>
<?php
	include 'footer.php';
?>