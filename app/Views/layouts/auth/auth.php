<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet" />
        <script src="<?= base_url() ?>/assets/js/font-awesome.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <?= $this->renderSection('content') ?>
            </div>
            <div id="layoutAuthentication_footer">
                <?= $this->include('layouts/auth/partials/footer') ?>
            </div>
        </div>
        <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/assets/js/scripts.js"></script>
    </body>
</html>
