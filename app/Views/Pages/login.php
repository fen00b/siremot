<?= $this->extend('layout/admin_dashboard'); ?>
<?= $this->section('content'); ?>


<?php echo \CodeIgniter\CodeIgniter::CI_VERSION ?>

<form action="/auth/login" method="post">
    <h5>Username</h5>
    <input type="text" name="username" value="" size="50">
    <br>
    <h5>Password</h5>
    <input type="text" name="password" value="" size="50">
</form>



<div><button onclick="document.location='/auth/login' " type="button" class="btn btn-secondary">Login</button></div>

<?= $this->endSection(); ?>