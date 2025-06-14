<?= $this->extend('layout/admin_dashboard'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form ubah data User</h2>

            <form action="/dashboard/users_update/<?= $id_user['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="id" placeholder="Uniq id" value="<?= $id_user['id']; ?>" hidden>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="username" placeholder="Nama Motor" value="<?= $id_user['username']; ?>" required>
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" name="password" placeholder="Nama Motor">
                    <label for="floatingInput">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" name="password_val" placeholder="Nama Motor">
                    <label for="floatingInput">Ulangi Password</label>
                </div>


                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Ubah Data User</button>
                <hr class="my-4">

            </form>
        </div>

    </div>

</div>


<?= $this->endSection(); ?>