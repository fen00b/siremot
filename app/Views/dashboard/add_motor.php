<?= $this->extend('layout/admin_dashboard'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah data Sepeda Motor</h2>
            <?= $validation->listErrors(); ?>
            <form action="/dashboard/save_motor" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="id" placeholder="Uniq id" value="<?= uniqid(); ?>" required hidden>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="nama" placeholder="Nama Motor" required>
                    <label for="floatingInput">Nama Motor</label>
                </div>
                <div class="row">
                    <div class="form-floating mb-3 col">
                        <select class="form-select" name="manufaktur" placeholder="manufaktur" required>
                            <option value="" selected disabled>Manufaktur</option>
                            <option value="Honda">Honda</option>
                            <option value="Kawasaki">Kawasaki</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Yamaha">Yamaha</option>
                        </select>
                        <label for="floatingSelect">Pilih Manufaktur</label>
                    </div>
                    <div class="form-floating mb-3 col">
                        <select class="form-select" name="jenis" placeholder="Jenis" required>
                            <option value="" selected disabled>Jenis</option>
                            <option value="cub">Cub/Bebek</option>
                            <option value="skuter">Skuter</option>
                            <option value="sport">Sport</option>
                            <option value="naked">Standard/ Naked</option>
                            <option value="trail-adv">Offroad/ Adventure</option>
                        </select>
                        <label for="floatingSelect">Pilih Jenis Sepeda Motor</label>
                    </div>
                    <div class="form-floating mb-3 col">
                        <select class="form-select" name="transmisi" placeholder="Transmisi" required>
                            <option value="" selected disabled>Transmisi</option>
                            <option value="CVT">Automatic</option>
                            <option value="Manual">Manual</option>
                        </select>
                        <label for="floatingSelect">Pilih Tipe Transmisi</label>
                    </div>

                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="jenis_detail" placeholder="Detail Jenis Sepeda Motor" required>
                    <label for="floatingInput">Detail Jenis</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="replacement" placeholder="Kubikasi Mesin" required>
                    <label for="floatingInput">Kubikasi Mesin</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="harga" placeholder="Harga" required>
                    <label for="floatingInput">Harga</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="tank_size" placeholder="Tank Size" required>
                    <label for="floatingInput">Ukuran Tangki BBM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="bagasi_size" placeholder="Bagasi Size" required>
                    <label for="floatingInput">Ukuran bagasi</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="other" placeholder="Other" required>
                    <label for="floatingInput">Fitur</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Deskripsi Sepeda Motor" name="deskripsi" placeholder="Desc"></textarea>
                    <label for="floatingTextarea">Deskripsi</label>
                </div>
                <div class="mb-3">
                    <label for="Gambar" class="form-label">Pilih gambar</label>
                    <input class="form-control" type="file" id="gambar" name="gambar" required>
                </div>


                <button class=" w-100 mb-2 btn btn-lg rounded-3 btn-primary">Tambah Motor</button>
                <hr class="my-4">

            </form>
        </div>

    </div>

</div>


<?= $this->endSection(); ?>