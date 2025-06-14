<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>





<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="mb-auto">

    </header>

    <main class="px-3">
        <h1>Selamat Datang di Sistem Rekomendasi Sepeda Motor!</h1>
        <p class="lead">Jika anda bingung dengan pilihan sepeda motor, sistem ini akan membantu anda! <br>
        </p>
        <p class="lead">
            <a href="/rekomendasi/" class="btn btn-lg btn btn-info" style="color: #212529ff;">Mulai Sistem</a> <br>
            <hr>
            <a href="/rekomendasi/list" class="btn btn-lg btn btn-primary" style="color: white;">Daftar Sepeda Motor</a>
        </p>
    </main>

    <footer class="mt-auto text-white-50">

    </footer>
</div>








<?= $this->endSection(); ?>