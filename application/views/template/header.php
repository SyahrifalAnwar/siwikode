<header class="header menu_fixed">
	<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
	<div id="logo">
		<a href="<?= base_url() ?>">
			<img src="<?= base_url(); ?>assets/img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
			<img src="<?= base_url(); ?>assets/img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
		</a>
	</div>
	<ul id="top_menu">

		<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>

	</ul>
	<!-- /top_menu -->
	<a href="#menu" class="btn_mobile">
		<div class="hamburger hamburger--spin" id="hamburger">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
	</a>
	<nav id="menu" class="main-menu">
		<ul>
			<li><span><a href="<?= base_url() ?>">Beranda</a></span>

			</li>
			<li><span><a href="<?= base_url('wisata') ?>">Wisata Rekreasi</a></span>
				<ul>
					<?php foreach ($menu_wisata as $menu_wisata) {?>
						<li>
							<a href="<?php echo base_url('wisata/').$menu_wisata['id'] ?>"><?= $menu_wisata['nama']; ?></a>
						</li>
					<?php } ?>
					
				</ul>
			</li>
			<li><span><a href="<?= base_url('kuliner') ?>">Wisata Kuliner</a></span>
				<ul>
					<?php foreach ($menu_kuliner as $menu_kuliner) {?>
						<li><a href="<?php echo base_url('kuliner/').$menu_kuliner['id'] ?>"><?= $menu_kuliner['nama']; ?></a></li>
					<?php } ?>
					
				</ul>
			</li>

		</ul>
	</nav>

</header>