<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>



<!doctype html>

<body class="snippet-body">
    <link href="/assets/dist/css/page-question.css" rel="stylesheet">
    <div class="container mt-sm-5 my-1 h-50">
        <form action="/rekomendasi/fungsi/" method="gets">

            <div class="question ml-sm-5 pl-sm-5 pt-2">
                <!-- Note 0.set name id pertanyaan menjadi $id -->
                <h3 hidden>
                    ID Pertanyaan : <?= $tanya['id_p']; ?><br>
                    OLD ID : <?= $old_id; ?>
                </h3>
                <input type="text" name="id" value="<?= $tanya['id_p'];
                                                    ?>" hidden>

                <div class="py-2 h6">
                    <h3><?= $tanya['pertanyaan']; ?></h3>
                </div>

                <?php
                if ($tanya['def_0'] == '0') {
                    $gambar = 'hidden';
                } else {
                    $gambar = '';
                } ?>

                <div class="card" style="width: 20rem; margin:0 auto;" <?= $gambar; ?>>
                    <hr>
                    <img src="/assets/img/pertanyaan/<?= $tanya['def_0'] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text"></p>
                    </div>
                </div>
                <hr>

                <?php
                if ($multi_opsi != null) {
                    // foreach ($multi_opsi as $mr) :
                    foreach ($multi_opsi as $mr) {
                        if (in_array($mr['id_opsi'], $dis_ops)) continue;
                ?>
                        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                            <input type="text" class="form-control rounded-3" name="old_id" placeholder="username" value="<?= $old_id; ?>" hidden>

                            <label class="options"><?= $mr['jawaban']; ?>
                                <input type="radio" name="radio" value="<?= $mr['id_opsi'] ?>">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    <?php }
                    // endforeach;
                } else {
                    ?>
                    <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
                        <input type="text" class="form-control rounded-3" name="old_id" placeholder="username" value="<?= $old_id; ?>" hidden>

                        <label class="options">Iya
                            <input type="radio" name="radio" value="1" required>
                            <span class="checkmark"></span>
                        </label>
                        <label class="options">Tidak
                            <input type="radio" name="radio" value="0">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                <?php  } ?>

            </div>
            <div class="d-flex align-items-center pt-4">
                <div class="btn">
                    <button class="btn btn-success">Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>
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