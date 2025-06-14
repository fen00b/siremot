<?= $this->extend('layout/admin_dashboard'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="container py-4">
        <h2>Detail Users</h2>
        <div class="row align-items-md-stretch">
            <div class="h-100 p-2 bg-body-tertiary border rounded-3" style="width: 300px;">
                <h4>ID : <?= $id_user['id']; ?></h4>
                <h4>Username : <?= $id_user['username']; ?></h4>
                <!-- <input type="password" class="form-control" id="exampleInputPassword1" value="<?= $id_user['password']; ?>"> -->
                <p hidden>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quae quo deserunt, praesentium repellendus earum maxime labore maiores quaerat pariatur architecto modi. Est, sint suscipit. Quas voluptas reprehenderit in natus.</p>
                <a href="/dashboard/users_edit?value=<?= $id_user['id']; ?>" class="btn btn-warning">Ubah</a>
                <a href="/dashboard/users_delete?value=<?= $id_user['id']; ?>" class="btn btn-danger">Hapus</a>
                <button class="btn btn-primary" onclick="document.location='/dashboard/users'" type="button">Kembali</button>

            </div>
        </div>
        <hr>
    </div>
</main>


<?= $this->endSection(); ?>