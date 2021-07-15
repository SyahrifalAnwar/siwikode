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
			
			<section class="hero_in restaurants start_bg_zoom">
				<div class="wrapper">
					<div class="container">
						<h1 class="fadeInUp animated"><span></span>WISATA DEPOK</h1>
					</div>
				</div>
			</section>
			<!--/hero_in-->
			
			<div class="filters_listing sticky_horizontal" style="">
				<div class="container">
					<ul class="clearfix">
						<li>
							<div class="switch-field">
								<input type="radio" id="all" name="listing_filter" value="all" checked="">
								<label for="all">All</label>
								<input type="radio" id="popular" name="listing_filter" value="popular">
								<label for="popular">Popular</label>
								<input type="radio" id="latest" name="listing_filter" value="latest">
								<label for="latest">Latest</label>
							</div>
						</li>
						<li>
							<div class="layout_view">
								<a href="restaurants-grid-isotope.html"><i class="icon-th"></i></a>
								<a href="#0" class="active"><i class="icon-th-list"></i></a>
							</div>
						</li>
						
					</ul>
				</div>
				<!-- /container -->
			</div>
			<!-- /filters -->
			
			
			<!-- End Map -->

			<div class="container margin_60_35">
				
				<?php foreach ($get_data as $get_data) { ?>
					<div class="box_list">
						<div class="row no-gutters">
							<div class="col-lg-5">
								<figure>
									<small><?= $get_data['nama'] ?></small>
									<a href="<?= base_url() ?>">
										<img src="<?= base_url().$get_data['foto']; ?>" class="img-fluid" alt="<?= $get_data['nama'] ?>" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
									</figure>
								</div>
								<div class="col-lg-7">
									<div class="wrapper">
										<a href="#0" class="wish_bt"></a>
										<h3><a href="<?= base_url('page/wisata/').$get_data['id'] ?>"><?= $get_data['nama'] ?></a></h3>
										<p><?= substr($get_data['deskripsi'], 0, 300).' ...' ?></p>
									</div>
									<ul>
										<li><a href="<?= base_url('page/wisata/').$get_data['id'] ?>" class="btn btn-primary"><i class="ti-eye"></i> Detail</a></li>
										<li><div class="score"><span>Rating</span><strong><?= $get_data['bintang'] ?>⭐</strong></div></li>
									</ul>
								</div>
							</div>
						</div>
					<?php } ?>
					
				</div>
				<!-- /container -->
				
				<!-- /bg_color_1 -->
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