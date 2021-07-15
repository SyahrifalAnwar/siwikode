    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/monokai-sublime.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>app-assets/vendors/quill/quill.bubble.css">
<?php foreach ($get_data as $get_data) {} ?>
    <form action="<?php echo base_url('master_data/simpan_wisata') ?>" method="POST">
    	<div class="row">
    		<div class="input-field col s12">
    			<input type="text" id="nama" value="<?= $get_data['nama'] ?>" name="nama">
    			<label class="active" for="nama">Judul</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="foto" name="foto" type="file">
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input type="text" value="<?= $get_data['deskripsi'] ?>" id="deskripsi" name="deskripsi">
    			<label class="active" for="deskripsi">Deskripsi</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="fasilitas" value="<?= $get_data['fasilitas'] ?>" name="fasilitas" type="text">
    			<label class="active" for="fasilitas">Fasilitas</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="bintang" value="<?= $get_data['bintang'] ?>" name="bintang" type="text">
    			<label class="active" for="bintang">Bintang</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="kontak" value="<?= $get_data['kontak'] ?>" name="kontak" type="text">
    			<label class="active" for="kontak">Kontak</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="alamat" value="<?= $get_data['alamat'] ?>" name="alamat" type="text">
    			<label class="active" for="alamat">Alamat</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="latlong" value="<?= $get_data['latlong'] ?>" name="latlong" type="text">
    			<label class="active" for="latlong">Location</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12"> 
    			<input id="email" name="email" value="<?= $get_data['email'] ?>" type="email">
    			<label class="active" for="email">Email</label>
    		</div>
    	</div>
    	<div class="row">
    		<div class="input-field col s12">
    			<input id="web" name="web" value="<?= $get_data['web'] ?>" type="text">
    			<label class="active" for="web">Web</label>
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