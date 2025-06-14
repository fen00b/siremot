<?= $this->extend('layout/admin_dashboard'); ?>
<?= $this->section('content'); ?>


<body>
    <main>
        <div class="p-5 mb-4 bg-body-tertiary rounded-3" style="width: 1200px;">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Dashboard Admin</h1>
                <h3>System Status</h3>
                <ul>
                    <?php
                    echo "Server Name :" . $_SERVER['SERVER_NAME'] . "<br>";
                    echo "Versi PHP :" . phpversion() . "<br>";
                    date_default_timezone_set("Asia/Jakarta");
                    echo "tanggal " . date('d-m-Y');

                    ?>

                </ul>
                <a href="/dashboard/motors" class="btn btn-primary" role="button">Olah Data Sepeda Motor</a>
                <br>
                <br>
                <a href="/dashboard/users" class="btn btn-primary" role="button">Olah Data Pengguna</a>
            </div>

    </main>

</body>

</html>
<?= $this->endSection(); ?>