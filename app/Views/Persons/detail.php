<?= $this->extend('template_views/template'); ?>
<?= $this->section('content'); ?>
<div class="row mt-5">
    <div class="col">
        <div class="card bg-light mb-3" style="max-width: 60rem;">
            <div class="card-header">
                <h3 class=""><strong><?= $person['nama']; ?></strong></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/img/personal.jpg" class="rounded float-left" alt="" style="width:80px"></div>
                    <div class="col-md ml-3">
                        <h4 class="card-title"><?= $person['nama']; ?></h4>
                        <p class="card-text">Saya berasal dari kota <?= $person['tempat_lahir']; ?></p>
                        <p>Jenis Kelamin : <?= ($person['gender'] == 0) ? 'Laki-laki' : 'Perempuan'; ?>, tanggal lahir : <?= $person['tanggal_lahir']; ?></p>
                        <p><i><?= $person['email']; ?></i></p>
                        <div class="d-flex justify-content-end mb-3">
                            <a href="" class=" btn btn-primary btn-sm mr-2">Edit</a>
                            <a href="" class=" btn btn-danger btn-sm ">Delete</a>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <a href="/persons" class="card-link "> &larr; Back to list persons</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>