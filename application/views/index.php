<!doctype html>
<html lang="en">
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href=" <?= base_url('assets') ?>/favicon.ico">
    <link rel="stylesheet" href="<?= base_url("assets/") ?>css/bootstrap.css">

    <title>MONITORING PENDAFTARAN</title>
</head>

<body class="container-fluid">
    <div class="text-center mt-2 mb-4">
        <h1>MONITORING PENDAFTARAN</h1>
    </div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">
                    <h2>NO</h2>
                </th>
                <th scope="col">
                    <h2>JAM PENDAFTARAN</h2>
                </th>
                <th scope="col">
                    <h2>NO RM</h2>
                </th>
                <th scope="col">
                    <h2>NAMA PASIEN</h2>
                </th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($data as $x) {
        ?>
            <tbody>
                <tr>
                    <th scope="row">
                        <h1><?= $no++ . "." ?></h1>
                    </th>
                    <td>
                        <h1><?= $x->tgl_registrasi . " - " . $x->jam_reg ?></h1>
                    </td>
                    <td>
                        <h1><?= $x->no_rkm_medis ?></h1>
                    </td>
                    <td>
                        <h1><?= $x->nm_pasien ?></h1>
                    </td>
                </tr>
            </tbody>
        <?php } ?>

    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url("assets/") ?>js/bootstrap.min.js"></script>
</body>

</html>