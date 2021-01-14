<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?> | Kangmul 2021</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css'); ?>">
</head>

<body>
    <!-- render partial navbar -->
    <?= $this->include('template_views/navbar'); ?>


    <!-- container -->
    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>

    <!-- bootstrap scrip -->
    <script src="<?= base_url('assets/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?= base_url('assets/jquery/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
</body>

</html>