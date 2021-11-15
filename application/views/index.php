<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/") ?>css/bootstrap.css">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Pemanggil Antrian</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Jam Pendaftaran</th>
                <th scope="col">No RM</th>
                <th scope="col">Nama</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($data as $x) {
        ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $x->tgl_registrasi . " - " . $x->jam_reg ?></td>
                    <td><?= $x->no_rkm_medis ?></td>
                    <td><?= $x->nm_pasien ?></td>
                </tr>
            </tbody>
        <?php } ?>

    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url("assets/") ?>js/bootstrap.min.js"></script>
</body>

</html>