<?= $this->extend('layout/admin_dashboard'); ?>
<?= $this->section('content'); ?>


<body>
    <main>
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h3>Record Pengunjung</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic labore vitae ducimus aperiam veritatis odio quis incidunt tempore molestiae dolorem in unde delectus porro libero, nisi laborum placeat quae rem.</p>
                <div>
                    <table class="table">
                        <tbody>
                            <?php //foreach ($guest as $g) : 
                            ?>
                            <tr>
                                <th>ID Pengunjung</th>
                                <th>Hasil</th>
                                <th>Satisfikasi</th>
                                <th>Alasan</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Verza</td>
                                <td>Ok</td>
                                <td>bagus</td>
                            </tr>
                            <?php //endforeach; 
                            ?>
                        </tbody>
                    </table>
                </div>


            </div>

    </main>
</body>

</html>
<?= $this->endSection(); ?>