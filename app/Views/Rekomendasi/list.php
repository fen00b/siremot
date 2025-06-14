<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>



<!doctype html>
<?php

// foreach ($tanya as $ask) {
// };
?>

<body class="snippet-body">
    <link href="/assets/dist/css/page-question.css" rel="stylesheet">

    <h2> Daftar Sepeda motor </h2>


    <!-- ========================================= -->
    <br>
    <div class="row">
        <!-- Form section -->
        <div class="col-md-8">
            <form class="menu p-4" action="/rekomendasi/list" method="get">
                <div class="row">
                    <div class="col" hidden>
                        <h5>Harga</h5>
                        <div class="form input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                            <input type="text" class="form-control" name="id_rekom" placeholder="id_rekom" value="list">
                        </div>
                    </div>
                    <div class="col">
                        <h5>Jenis
                            <div class="form-floating mb-3 col">
                                <select class="form-select" name="jenis" placeholder="jenis">
                                    <option value="" selected disabled>Jenis</option>
                                    <option value="bebek">Bebek</option>
                                    <option value="skuter">Skuter</option>
                                    <option value="sport">Sport</option>
                                    <option value="naked">Naked</option>
                                    <option value="trail-adv">Trail/Adventure</option>
                                </select>
                                <label for="floatingSelect">Pilih Jenis</label>
                            </div>
                    </div>
                    <div class="col">
                        <h5>Manufaktur</h5>
                        <div class="form-floating mb-3 col">
                            <select class="form-select" name="manufaktur" placeholder="manufaktur">
                                <option value="" selected disabled>Manufaktur</option>
                                <option value="Honda">Honda</option>
                                <option value="Kawasaki">Kawasaki</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Yamaha">Yamaha</option>
                            </select>
                            <label for="floatingSelect">Pilih Manufaktur</label>
                        </div>
                    </div>
                    <div class="col">
                        <h5>Harga</h5>
                        <div class="form input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                            <input type="number" class="form-control" name="harga" placeholder="Harga" min="<?php echo min(array_column($rekomendasi, 'harga')); ?>" max="<?php echo max(array_column($rekomendasi, 'harga')); ?>">
                        </div>
                    </div>
                    <div class=" col">
                        <h5>Fitur</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="abs" name="abs" placeholder="ABS">
                            <label class="form-check-label" for="flexCheckChecked">
                                ABS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="tc" name="tc" placeholder="TC">
                            <label class="form-check-label" for="flexCheckChecked">
                                Traction Control
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="keyless" name="keyless" placeholder="KL">
                            <label class="form-check-label" for="flexCheckChecked">
                                Keyless
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="ps" name="power_socket" placeholder="PS">
                            <label class="form-check-label" for="flexCheckChecked">
                                USB Charger/ Power Socket
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-success">Filter</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Sort section -->
        <div class="col-md-4">
            <div class="row-sort">
                <div class="col">
                    <h5>Urutkan dari</h5>
                    <div class="form-floating mb-3 col">
                        <select class="form-select" name="sort_by" id="sort_by" placeholder="sorting">
                            <option value="price_lh" selected disabled>Urutkan</option>
                            <option value="price_hl">Harga Tertinggi -> Harga Terendah</option>
                            <option value="price_lh">Harga Terendah -> Harga Tertinggi</option>
                            <option value="bagasi_size">Kapasitas bagasi</option>
                            <option value="fuel_size">Kapasitas BBM</option>
                        </select>
                        <label for="floatingSelect">Urutkan dari</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>




    <div class="row mb-3" id="rekomendasi-container">
        <?php foreach ($rekomendasi as $h) : ?>
            <div class="col-md-12 rekomendasi-item" data-harga="<?= $h['harga']; ?>" data-bagasi="<?= $h['bagasi_size']; ?>" data-fuel="<?= $h['tank_size']; ?>">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 p-3 position-relative">
                    <div class="col-auto d-none d-lg-block">
                        <div class="p-4 mb-4 bg-body-tertiary rounded-3">
                            <img src="/assets/img/motor/<?= $h['image'] ?>" alt="Gambar <?= $h['nama']; ?>" width="200">
                        </div>
                    </div>
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis"><?= $h['manufaktur']; ?></strong>
                        <h3 class="mb-2"><?= $h['nama']; ?></h3>
                        <p class="card-text mb-auto">
                            Tipe : <?= $h['jenis']; ?> <br>
                            Transmisi : <?= $h['transmisi']; ?> <br>
                            Fitur : <br>
                            <?= $h['other']; ?>
                        </p>
                    </div>
                    <div class="col-md-3 p-2 d-none d-lg-block">
                        <div class="p-4 mb-2 bg-body-tertiary rounded-3">
                            <h5 class="d-inline-block mb-2 text-primary-emphasis">Rp. <?= number_format($h['harga'], 0, ',', '.'); ?></h5>
                            <a href="/rekomendasi/produk?id=<?= $h['id']; ?>" class="btn btn-success">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <script type='text/javascript'>
        document.getElementById('sort_by').addEventListener('change', function() {
            let sortBy = this.value;
            let container = document.getElementById('rekomendasi-container');
            let items = Array.from(container.getElementsByClassName('rekomendasi-item'));

            items.sort(function(a, b) {
                if (sortBy === 'price_hl') {
                    return b.getAttribute('data-harga') - a.getAttribute('data-harga');
                } else if (sortBy === 'price_lh') {
                    return a.getAttribute('data-harga') - b.getAttribute('data-harga');
                } else if (sortBy === 'bagasi_size') {
                    return b.getAttribute('data-bagasi') - a.getAttribute('data-bagasi');
                } else if (sortBy === 'fuel_size') {
                    return b.getAttribute('data-fuel') - a.getAttribute('data-fuel');
                }
            });

            // Reorder DOM elements
            container.innerHTML = '';
            items.forEach(function(item) {
                container.appendChild(item);
            });
        });
    </script>







    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>

    </script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>






    <?= $this->endSection(); ?>