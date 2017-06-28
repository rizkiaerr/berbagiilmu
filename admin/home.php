<div class="row">
	<div class="container-fluid">
		<h1 class="page-header">
            Buku Terbaru
        </h1>
		<div class="well">
			<div id="myCarousel_book_1" class="carousel slide">	
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<div class="col-sm-2"></a></div>
							<?php
								$query = "SELECT * FROM buku ORDER BY tanggal_upload DESC";
								$res = mysqli_query($link, $query);

								$no=0;
								while($data=mysqli_fetch_array($res))
								{
									$no++;
							?>
									<div class="col-sm-2"><a href="baca.php?kategori=<?php echo"$data[buku_kategori]" ?>&judul=<?php echo"$data[buku_judul]" ?>" class="thumbnail"><?php echo cl_image_tag("$data[buku_id].jpg", array("width" => 200, "height" => 250, "crop" => "fill", "page" => 1)); ?></a></div>
									<?php
										if($no % 4 == 0){
									?>

										<div class="col-sm-2"></a></div>
										</div>
										</div>
										<div class="item">
											<div class="row">
												<div class="col-sm-2"></a></div>
												<?php
													while($data=mysqli_fetch_array($res)){
														$no++;
												?>
														<div class="col-sm-2"><a href="baca.php?kategori=<?php echo"$data[buku_kategori]" ?>&judul=<?php echo"$data[buku_judul]" ?>" class="thumbnail"><?php echo cl_image_tag("$data[buku_id].jpg", array("width" => 200, "height" => 250, "crop" => "fill", "page" => 1)); ?></a></div>
														<?php
															if($no % 4 == 0){
														?>

														<?php
																break;
															}
														?>
												<?php
													}
												?>	
											<div class="col-sm-2"></a></div>							
											</div>
										</div>

									<?php
											break;
										}
									?>
							<?php
								}
							?>								
				</div>
				
				<!--/carousel-inner--> 
				<a class="left carousel-control" href="#myCarousel_book_1" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel_book_1" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--/myCarousel-->
		</div>
		<!--/well-->
	</div>
	<br><br>

	<div class="container-fluid">
		<h1 class="page-header">
            Teknologi Itu Indah
        </h1>
		<div class="well">
			<div id="myCarousel_book_2" class="carousel slide">	
				<!-- Carousel items -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<div class="col-sm-2"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/2.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/1.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/2.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/1.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"></a></div>									
						</div>
						<!--/row-->
					</div>
					<!--/item-->
					
					<div class="item">
						<div class="row">
							<div class="col-sm-2"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/2.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/1.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/2.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/1.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"></a></div>	
						</div>
						<!--/row-->
					</div>
					<!--/item-->
								
					<div class="item">
						<div class="row">
							<div class="col-sm-2"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/2.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/1.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/2.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"><a href="baca.php" class="thumbnail"><img src="../image/book_slider_1/1.jpg" alt="Image" class="img-responsive"></a></div>
							<div class="col-sm-2"></a></div>	
						</div>
						<!--/row-->
					</div>
					<!--/item-->
				</div>
				
				<!--/carousel-inner--> 
				<a class="left carousel-control" href="#myCarousel_book_2" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel_book_2" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--/myCarousel-->
		</div>
		<!--/well-->
	</div>
	<center>
	<br><br>
	<h1><i> "Knowledge Only Powerful</h2>
	<h1><i> When Shared"</h2>
	<h3><i> Anonim</h2>
			
</div>