
<form action="<?php echo base_url('master_data/simpan_wisata') ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" required="" id="nama" name="nama" placeholder="">
            <label for="nama" class="active">Judul</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="foto" name="foto" type="file" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <select name="jenis_wisata_id">
              <option value="" disabled selected>Pilih tipe wisata</option>
              <?php foreach ($menu_wisata as $menu_wisata) { ?>
                  <option value="<?php echo $menu_wisata['id'] ?>"><?php echo $menu_wisata['nama'] ?></option>
              <?php } ?>
          </select>
          <label class="active" for="deskripsi">Tipe Wisata</label>
      </div>

  </div>

  <div class="row">
    <div class="input-field col s12">
        <select name="jenis_wisata_id">
              <option value="" disabled selected>Pilih tipe kuliner</option>
              <?php foreach ($menu_kuliner as $menu_kuliner) { ?>
                  <option value="<?php echo $menu_kuliner['id'] ?>"><?php echo $menu_kuliner['nama'] ?></option>
              <?php } ?>
          </select>
      <label class="active" for="deskripsi">Tipe Kuliner</label>
  </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input type="text" id="deskripsi" name="deskripsi">
        <label class="active" for="deskripsi">Deskripsi</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="fasilitas" name="fasilitas" type="text">
        <label class="active" for="fasilitas">Fasilitas</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="bintang" name="bintang" type="text">
        <label class="active" for="bintang">Bintang</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="kontak" name="kontak" type="text">
        <label class="active" for="kontak">Kontak</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="alamat" name="alamat" type="text">
        <label class="active" for="alamat">Alamat</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="latlong" name="latlong" type="text">
        <label class="active" for="latlong">Location</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="email" name="email" type="email">
        <label class="active" for="email">Email</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        <input id="web" name="web" type="text">
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