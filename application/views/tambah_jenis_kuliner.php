<form action="<?php echo base_url('master_data/simpan_jenis_kuliner') ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="input-field col s12">
            <input type="text" required="" id="nama" name="nama" placeholder="">
            <label for="nama" class="active">Jenis Kuliner</label>
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