<?= $this->extend('layout/admin_dashboard'); ?>

<?= $this->section('content'); ?>

<script>
    function verifyPassword() {
        var pw = document.getElementById("password").value;
        var pw2 = document.getElementById("password_val").value;
        var message = document.getElementById("message");

        // check empty password field
        if (pw == "") {
            message.innerHTML = "**Masukan Password!";
            message.style.display = 'block';
            return false;
        }

        // minimum password length validation
        if (pw.length < 8) {
            message.innerHTML = "**Password harus terdiri dari 8 karakter";
            message.style.display = 'block';
            return false;
        }

        // check if both passwords match
        if (pw != pw2) {
            message.innerHTML = "**Password tidak sama!";
            message.style.display = 'block';
            return false;
        } else {
            message.style.display = 'none';
        }

        return true; // return true to allow form submission
    }
</script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form tambah data User</h2>

            <form onsubmit="return verifyPassword()" action="/dashboard/users_save/" method="post">
                <?= csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="id" placeholder="Uniq id" value="<?= uniqid(); ?>" hidden>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="username" placeholder="username" required>
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" id="password" name="password" placeholder="password">
                    <label for="floatingInput">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-3" id="password_val" name="password_val" placeholder="password_val">
                    <label for="floatingInput">Ulangi Password</label>
                </div>

                <div class="error" id="message" style="display: none; color: red;"></div>

                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary">Tambah Data User</button>
                <hr class="my-4">

            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>