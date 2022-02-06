<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="<?= base_url() ?>/assets/css/simple-datatables.css" rel="stylesheet" />
        <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet" />
        <script src="<?= base_url() ?>/assets/js/font-awesome.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?= $this->include('layouts/default/partials/navbar') ?>
        <div id="layoutSidenav">
            <?= $this->include('layouts/default/partials/sidebar') ?>
            <div id="layoutSidenav_content">
                <?= $this->renderSection('content') ?>
                <?= $this->include('layouts/default/partials/footer') ?>
            </div>
        </div>
        <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/assets/js/scripts.js"></script>
        <script src="<?= base_url() ?>/assets/js/chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/assets/demo/chart-area-demo.js"></script>
        <script src="<?= base_url() ?>/assets/demo/chart-bar-demo.js"></script>
        <script src="<?= base_url() ?>/assets/js/simple-datatables.js" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/assets/js/datatables-simple-demo.js"></script>
        <?= $this->renderSection('script') ?>
    </body>
</html>
