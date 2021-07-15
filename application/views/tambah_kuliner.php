    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/quill.bubble.css">

    <form action="<?php echo base_url('master_data/simpan_wisata') ?>" method="POST">
    	<div class="row">
    		<div class="input-field col s12">
    			<input type="text" id="nama" name="nama">
    			<label for="nama">Judul</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="foto" name="foto" type="file">
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input type="text" id="deskripsi" name="deskripsi">
    			<label for="deskripsi">Deskripsi</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="fasilitas" name="fasilitas" type="text">
    			<label for="fasilitas">Fasilitas</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="bintang" name="bintang" type="text">
    			<label for="bintang">Bintang</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="kontak" name="kontak" type="text">
    			<label for="kontak">Kontak</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="alamat" name="alamat" type="text">
    			<label for="alamat">Alamat</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="latlong" name="latlong" type="text">
    			<label for="latlong">Location</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="email" name="email" type="email">
    			<label for="email">Email</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="web" name="web" type="text">
    			<label for="web">Web</label>
    		</div>
    	</div>

    	<div class="row">
    		
    		<div class="row">
    			<div class="input-field col s12">
    				<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Simpan
    					<i class="material-icons right">send</i>
    				</button>
    			</div>
    		</div>
    	</div>
    </form>

     <script src="<?php echo base_url(); ?>app-assets/vendors/quill/katex.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/quill/highlight.min.js"></script>
    <script src="<?php echo base_url(); ?>app-assets/vendors/quill/quill.min.js"></script>