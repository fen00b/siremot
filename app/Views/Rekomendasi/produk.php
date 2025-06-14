<!DOCTYPE html>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="container py-4">
        <div class="row align-items-md-stretch">
            <div class="col-md-4">
                <div class="h-100 p-1 bg-body-tertiary border rounded-3">
                    <img src="/assets/img/motor/<?= $produk['image']; ?>" alt="Gambar <?= $produk['nama']; ?> " width="275">
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-2 bg-body-tertiary border rounded-3">
                    <strong class="d-inline-block mb-2 text-primary-emphasis"><?= $produk['manufaktur'];
                                                                                ?></strong>
                    <h2><?= $produk['nama']; ?></h2>
                    <h4><?= $produk['jenis_detail']; ?></h4>
                    <p>Spesifikasi : <br>
                        Volume Mesin : <?= $produk['replacement']; ?> CC<br>
                        Transmisi : <?= $produk['transmisi']; ?><br>
                        Kapasitas Tangki BBM: <?= $produk['tank_size']; ?> L<br>
                        Kapasitas Bagasi: <?php if ($produk['bagasi_size'] < 2) {
                                                echo "Hanya untuk toolkit dan surat";
                                            } else {
                                                echo $produk['bagasi_size'], " L";
                                            }; ?> <br>


                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="h-100 p-2 bg-body-tertiary border rounded-3">
                    <button class="btn btn-primary" onclick="document.location='/rekomendasi/hasil'" type="button">Kembali ke Hasil</button>
                    <p></p>
                    <button class="btn btn-success" onclick="document.location='/'" type="button">Selesai</button>
                </div>
            </div>
        </div>
        <hr>

        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <h3 class="d-inline-block mb-2 text-primary-emphasis">Harga : Rp. <?= number_format($produk['harga'], 0, ',', '.'); ?></h3>
            <div class="container-fluid py-5">
                <h3 class="display-9 fw-bold">
                    Fitur : <?= $produk['other']; ?>
                </h3>
                <p class="col fs-4">
                    <?= $produk['deskripsi']; ?>
                </p>
                <!-- <button class="btn btn-primary btn-lg" type="button">Selesai</button> -->
            </div>
        </div>
    </div>
</main>

<?= $this->endSection(); ?>

</html>