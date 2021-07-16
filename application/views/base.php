<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('template/head') ?>

<body>
	
	<div id="page">
	
	<?php $this->load->view('template/header') ?>
	<!-- /header -->
		
	<main>
		<!-- Slider -->
	<?php $this->load->view('template/slide') ?>
		<!-- End layerslider -->

		<div class="container container-custom margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Wisata Pilihan di Kota Depok</h2>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<?php foreach ($get_data_wisata as $get_data_wisata) { ?>
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="<?php echo base_url('page/wisata/').$get_data_wisata['id'] ?>"><img src="<?= base_url().$get_data_wisata['foto']; ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							<small>Historic</small>
						</figure>
						<div class="wrapper">
							<h3><a href="<?php echo base_url('page/wisata/').$get_data_wisata['id'] ?>"><?php echo $get_data_wisata['nama']; ?></a></h3>
						</div>
						
					</div>
				</div>
			<?php } ?>
			</div>
			<!-- /carousel -->
			<p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">View all Tours</a></p>
			<hr class="large">
		</div>
		<!-- /container -->
		
		<div class="container container-custom margin_30_95">
		
			
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Popular Kuliner </h2>
				</div>
				<div class="row">
					<?php foreach ($get_data_kuliner as $get_data_kuliner) { ?>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="<?php echo base_url('page/kuliner/').$get_data_kuliner['id']; ?>" class="grid_item">
							<figure>
								<div class="score"><strong><?= $get_data_kuliner['bintang']; ?></strong></div>
								<img src="<?= base_url().$get_data_kuliner['foto']; ?>" class="img-fluid" alt="<?= $get_data_kuliner['nama']; ?>">
								<div class="info">
									<h3><?= $get_data_kuliner['nama']; ?></h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<?php } ?>
				</div>
				<!-- /row -->
			
			</section>
			<!-- /section -->


		</div>
		<!-- /container -->

	

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->
	
	<?php $this->load->view('template/footer') ?>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<?php $this->load->view('login') ?>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
   <?php $this->load->view('template/script') ?>
    <script>
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            navButtons: false,
            navStartStop: false,
            showCircleTimer: false,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1200,
            skinsPath: 'layerslider/skins/'
                // Please make sure that you didn't forget to add a comma to the line endings
                // except the last line!
        });
    </script>
	
	
	
</body>
</html>