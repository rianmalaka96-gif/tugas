<?= $this->extend('template/main'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Handphone</h1>
            <a href="/handphone/tambah" class="btn btn-primary mb-3">Tambah Data Handphone</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Spesifikasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($handphone as $h) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $h['merk']; ?></td>
                            <td><?= $h['tipe']; ?></td>
                            <td><?= $h['spesifikasi']; ?></td>
                            <td>
                                <a href="/handphone/edit/<?= $h['id']; ?>" class="btn btn-warning">Edit</a>
                                <form action="/handphone/hapus/<?= $h['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
