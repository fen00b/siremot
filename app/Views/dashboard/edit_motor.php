<?= $this->extend('layout/admin_dashboard'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form ubah data Sepeda Motor</h2>

            <form action="/dashboard/update_motor/<?= $produk['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="id" placeholder="Uniq id" value="<?= $produk['id']; ?>" hidden>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="nama" placeholder="Nama Motor" value="<?= $produk['nama']; ?>" required>
                    <label for="floatingInput">Nama Motor</label>
                </div>
                <div class="row">
                    <div class="form-floating mb-3 col">
                        <select class="form-select" name="manufaktur" placeholder="manufaktur" required>
                            <option value="" disabled>Manufaktur</option>
                            <option value="Honda" <?php if ($produk['manufaktur'] == 'Honda') {
                                                        echo 'selected';
                                                    } ?>>Honda</option>
                            <option value="Kawasaki" <?php if ($produk['manufaktur'] == 'Kawasaki') {
                                                            echo 'selected';
                                                        } ?>>Kawasaki</option>
                            <option value="Suzuki" <?php if ($produk['manufaktur'] == 'Suzuki') {
                                                        echo 'selected';
                                                    } ?>>Suzuki</option>
                            <option value="Yamaha" <?php if ($produk['manufaktur'] == 'Yamaha') {
                                                        echo 'selected';
                                                    } ?>>Yamaha</option>
                        </select>
                        <label for="floatingSelect">Pilih Manufaktur</label>
                    </div>
                    <div class="form-floating mb-3 col">
                        <select class="form-select" name="jenis" placeholder="Jenis" required>
                            <option value="" disabled>Jenis</option>
                            <option value="cub" <?php if ($produk['jenis'] == 'cub') {
                                                    echo 'selected';
                                                } ?>>Cub/Bebek</option>
                            <option value="skuter" <?php if ($produk['jenis'] == 'skuter') {
                                                        echo 'selected';
                                                    } ?>>Skuter</option>
                            <option value="sport" <?php if ($produk['jenis'] == 'sport') {
                                                        echo 'selected';
                                                    } ?>>Sport</option>
                            <option value="naked" <?php if ($produk['jenis'] == 'naked') {
                                                        echo 'selected';
                                                    } ?>>Standard/ Naked</option>
                            <option value="trail_adv" <?php if ($produk['jenis'] == 'trail-adv') {
                                                            echo 'selected';
                                                        } ?>>Offroad/ Adventure</option>
                        </select>
                        <label for="floatingSelect">Pilih Jenis Sepeda Motor</label>
                    </div>
                    <div class="form-floating mb-3 col">
                        <select class="form-select" name="transmisi" placeholder="Transmisi" required>
                            <option value="" <?php if ($produk['transmisi'] == '') {
                                                    echo 'selected';
                                                } ?> disabled>Transmisi</option>
                            <option value="CVT" <?php if ($produk['transmisi'] == 'CVT') {
                                                    echo 'selected';
                                                } ?>>Automatic</option>
                            <option value="Manual" <?php if ($produk['transmisi'] == 'Manual') {
                                                        echo 'selected';
                                                    } ?>>Manual</option>
                        </select>
                        <label for="floatingSelect">Pilih Tipe Transmisi</label>
                    </div>

                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="jenis_detail" placeholder="Detail Jenis Sepeda Motor" value="<?= $produk['jenis']; ?>" required>
                    <label for="floatingInput">Detail Jenis</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="replacement" placeholder="Kubikasi Mesin" value="<?= $produk['replacement']; ?>" required>
                    <label for="floatingInput">Kubikasi Mesin</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="harga" placeholder="Harga" value="<?= $produk['harga']; ?>" required>
                    <label for="floatingInput">Harga</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="tank_size" placeholder="Tank Size" value="<?= $produk['tank_size']; ?>" required>
                    <label for="floatingInput">Ukuran Tangki BBM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="bagasi_size" placeholder="Bagasi Size" value="<?= $produk['bagasi_size']; ?>" required>
                    <label for="floatingInput">Ukuran bagasi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="other" placeholder="Other" value="<?= $produk['other']; ?>" required>
                    <label for="floatingInput">Fitur</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Deskripsi Sepeda Motor" name="deskripsi" placeholder="Desc" value="<?= $produk['deskripsi']; ?>"></textarea>
                    <label for="floatingTextarea">Deskripsi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="image" placeholder="Gambar" value="<?= $produk['image']; ?>" required>
                    <label for="floatingInput">Gambar</label>
                </div>


                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Ubah Data Motor</button>
                <hr class="my-4">

            </form>
        </div>

    </div>

</div>


<?= $this->endSection(); ?>