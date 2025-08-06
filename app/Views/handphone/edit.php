<?= $this->extend('template/main'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Handphone</h2>
            <form action="/handphone/update/<?= $handphone['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $handphone['id']; ?>">
                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="merk" name="merk" autofocus value="<?= $handphone['merk']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $handphone['tipe']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="spesifikasi" name="spesifikasi" rows="3"><?= $handphone['spesifikasi']; ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
