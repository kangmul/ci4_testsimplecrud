<!doctype html>
<html lang="en">

<head>
    <title><?= $title; ?> | Kangmul 2021</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- my custom css -->
    <link rel="stylesheet" href="/assets/mysettings/css/mystyle.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('/assets/bootstrap/dist/css/bootstrap.min.css'); ?>">

    <!-- Datatables -->
    <link rel="stylesheet" href="/assets/DataTables/cdn/jquery.dataTables.css">

    <!-- bootstrap dateteime picker -->
    <link rel="stylesheet" href="/assets/bootstrap-datetime-picker/dist/css/bootstrap-datepicker.min.css ">

    <!-- bootstrap scrip -->
    <script src="<?= base_url('assets/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?= base_url('assets/jquery/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- datatables -->
    <script src="/assets/DataTables/cdn/jquery.dataTables.js"> </script>

    <!-- bootstrap js datetime picker -->
    <script src="/assets/bootstrap-datetime-picker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- sweet alert 2 -->
    <script src="/assets/sweetalert2/dist/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="/assets/sweetalert2/dist/sweetalert2.min.css">

</head>

<body>
    <!-- render partial navbar -->
    <?= $this->include('template_views/navbar'); ?>


    <!-- container -->
    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>


</body>

</html>