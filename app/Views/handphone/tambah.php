<?= $this->extend('template/main'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Handphone</h2>
            <form action="/handphone/simpan" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="merk" name="merk" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tipe" name="tipe">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="spesifikasi" name="spesifikasi" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
