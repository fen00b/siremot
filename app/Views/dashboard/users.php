<?= $this->extend('layout/admin_dashboard'); ?>
<?= $this->section('content'); ?>


<body>
    <main>
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5" style="width: 500px;">
                <h3>Data Username Admin</h3>
                <div class="col">
                    <a href="/dashboard/users_add" class="btn btn-success">Tambah Data Admin</a>
                </div>

                <div>
                    <table class="table">
                        <tbody>
                            <?php foreach ($user as $u) : ?>
                                <tr>
                                    <th scope="row"><?= $u['id']; ?></th>
                                    <td><?= $u['username']; ?></td>
                                    <td><a href="/dashboard/users_detail?value=<?= $u['id']; ?>" class="btn btn-success">Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>


            </div>

    </main>
</body>

</html>
<?= $this->endSection(); ?>