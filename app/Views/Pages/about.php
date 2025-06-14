<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">

    </header>

    <main class="px-3">
        <img src="/assets/img/fen00b512.png" alt="fen00b_logo" width="100" height="100">
        <h2>Tentang Sistem Ini</h1>
            <p class="lead">
                Sistem ini dibuat sebagai syarat Sidang Skripsi "Implementasi Content Based Filtering pada Sistem Rekomendasi Sepeda Motor"
            </p>
            <p class="lead"> Soscial Media <br>
                <a href="https://www.facebook.com/feno.fh21" class="btn btn-primary ">Facebook</a>
                <a href="https://www.linkedin.com/in/fen00b/" class="btn btn-info ">LinkedIn</a>
                <a href="/diagnosa/" class="btn btn-danger ">instagram</a>
            </p>
    </main>

    <footer class="mt-auto text-white-50">

    </footer>
</div>


<?= $this->endSection(); ?>