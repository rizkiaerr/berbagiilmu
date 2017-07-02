<?php
	include 'header.php';
	//include 'koneksi.php';
	if(empty($_POST['txt_cari'])){
		$isi_cari=$_GET['txt_cari'];
	} else{
		$isi_cari = $_POST['txt_cari'];	
	}
     
?>

<!-- Ambil Data -->
    <!-- Page Content -->
    <div class="container">
    <br>
	    <div class="jumbotron">
	    <?php
			$cmd = "select kategori_jenis from kategori";
			$ecmd = mysqli_query($link, $cmd);
			echo "<center>";
			echo "<table border=0>";
			echo "<tr>";
			$nom=0;
			while ($data_kategori=mysqli_fetch_array($ecmd)) {
				echo "<td width=18%><a href='cari.php?txt_cari=$data_kategori[kategori_jenis]'> $data_kategori[kategori_jenis] </a></td>";
				$nom++;
				if ($nom%5==0) {
					echo "</tr>";
					echo "<tr>";
				}

			}
			echo "</table>";
			echo "</center>";
		?>
		</div>
		<br>
		<h4> Hasil Pencarian <?php echo $isi_cari; ?></h4>
		<hr>
		<div class="col-sm-12">
			<?php
				//$link = koneksi_db();
			 	if(empty($_POST['txt_cari'])){
			    	$query = "SELECT admin_nama, admin_foto, buku_id, buku_kategori, buku_judul FROM buku_admin,admin WHERE admin_id=buku_author AND buku_kategori = (select kategori_id from kategori where kategori_jenis='".$isi_cari."')";
			    	$res = mysqli_query($link, $query);
			     } else {
			     	$query = "SELECT admin_nama, admin_foto, buku_id, buku_kategori, buku_judul FROM admin, buku_admin WHERE admin.admin_id=buku_admin.buku_author and buku_judul LIKE '%$isi_cari%' ";
					$query1 = "SELECT member_nama, member_foto, buku_id, buku_kategori, buku_judul FROM buku,member WHERE member.member_id=buku.buku_author and buku_judul LIKE '%$isi_cari%'";
					$res = mysqli_query($link, $query);
					$res1 = mysqli_query($link, $query1);
				}
			?>

			<?php
				if(!empty($_POST['txt_cari'])){
			?>			
				<?php
					$no=0;
					while($data_buku=mysqli_fetch_array($res))
					{
				?>
					<div class="col-sm-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<p align="center">
									<a href="baca.php?kategori=<?php echo"$data_buku[buku_kategori]" ?>&judul=<?php echo"$data_buku[buku_judul]" ?>&foto=<?php echo"$data_buku[admin_foto]" ?>&nama=<?php echo"$data_buku[admin_nama]" ?>"><?php echo cl_image_tag("$data_buku[buku_id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></p></a>
								</p>
							</div>
							<div class="panel-footer">
								<a href="baca.php?kategori=<?php echo"$data_buku[buku_kategori]" ?>&judul=<?php echo"$data_buku[buku_judul]" ?>&foto=<?php echo"$data_buku[admin_foto]" ?>&nama=<?php echo"$data_buku[admin_nama]" ?>"><b><?php echo"$data_buku[buku_judul]"; ?></b></a>
							</div>
						</div>
					</div>
				<?php
					}
				?>

				
				<?php
					$no=0;
					while($data_buku1=mysqli_fetch_array($res1))
					{
				?>
					<div class="col-sm-4 ">
						<div class="panel panel-default">
							<div class="panel-body">
								<p align="center">
									<a href="baca.php?judul=<?php echo"$data_buku1[buku_judul]" ?>&kategori=29&foto=<?php echo"$data_buku1[member_foto]" ?>&nama=<?php echo"$data_buku1[member_nama]" ?>"><?php echo cl_image_tag("$data_buku1[buku_id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></p></a>
								</p>
							</div>
							<div class="panel-footer">
								<a href="baca.php?judul=<?php echo"$data_buku1[buku_judul]" ?>&kategori=29&foto=<?php echo"$data_buku1[member_foto]" ?>&nama=<?php echo"$data_buku1[member_nama]" ?>" align=center><b><?php echo"$data_buku1[buku_judul]"; ?></b></a>
							</div>
						</div>
					</div>
				<?php
					}
				?>
			<?php
			}else {
			?>
				<?php
					$no=0;
					while($data_buku=mysqli_fetch_array($res))
					{
				?>
					<div class="col-sm-4 ">
						<div class="panel panel-default">
							<div class="panel-body">
								<p align="center">
									<a href="baca.php?kategori=<?php echo"$data_buku[buku_kategori]" ?>&judul=<?php echo"$data_buku[buku_judul]" ?>&foto=<?php echo"$data_buku[admin_foto]" ?>&nama=<?php echo"$data_buku[admin_nama]" ?>"> <?php echo cl_image_tag("$data_buku[buku_id].jpg", array("width" => 140, "height" => 180, "crop" => "fill", "page" => 1)); ?></p></a>
								</p>
							</div>
							<div class="panel-footer">
								<a href="baca.php?kategori=<?php echo"$data_buku[buku_kategori]" ?>&judul=<?php echo"$data_buku[buku_judul]" ?>&foto=<?php echo"$data_buku[admin_foto]" ?>&nama=<?php echo"$data_buku[admin_nama]" ?>"><b><?php echo"$data_buku[buku_judul]"; ?></b></a>
							</div>
						</div>
					</div>
				<?php
					}
				?>
				
			<?php
			}
			?>
		</div>
	</div>
<?php
	include 'footer.php';
?>