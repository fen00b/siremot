<?= $this->extend('layout/admin_dashboard'); ?>
<?= $this->section('content'); ?>


<body>
    <main>
        <div class="p-5 mb-3 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Data Sepeda Motor</h1>
                <div class="row">
                    <div class="col">


                    </div>
                    <div class="col">
                        <a href="/dashboard/add_motor" class="btn btn-success">Tambah Data Sepeda Motor</a>

                    </div>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped-columns">
                    <thead>
                        <tr>
                            <th scope=" col">ID</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Manufaktur</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Opsi</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($motor as $m) : ?>
                            <tr>
                                <th scope="row"><?= $m['id']; ?></th>
                                <th scope="row"><img src="/assets/img/motor/<?= $m['image']; ?>" width="100" alt="<?= $m['nama']; ?>"></th>
                                <th scope="row"><?= $m['manufaktur']; ?></th>
                                <th scope="row"><?= $m['nama']; ?></th>
                                <th scope="row">Rp. <?= number_format($m['harga'], 0, ',', '.'); ?></th>
                                <th scope="row"><?= $m['jenis_detail']; ?></th>
                                <td>
                                    <a href="/dashboard/detail_motor?value=<?= $m['id']; ?>" class="btn btn-primary">Detail</a>

                                    <a href="/dashboard/delete_motor?value=<?= $m['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

    </main>
</body>

</html>
<?= $this->endSection(); ?>