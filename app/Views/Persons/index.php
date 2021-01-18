<?php

use App\Models\PersonsModel;
?>
<?= $this->extend('template_views/template'); ?>

<?= $this->section('content'); ?>
<style>
    .btn-xs {
        padding: .25rem .25rem;
        font-size: .7rem;
        line-height: 1;
        border-radius: .2rem;
    }
</style>
<div class="row">
    <div class="col my-5">
        <?php if (session()->getFlashdata('message')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> <?= session()->getFlashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <p>Halaman ini untuk pengelolaan persons</p>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahDataPersons">Tambah data via modal</button>
        <a href="/Persons/create" class="btn btn-primary btn-sm">Tambah data New Page</a>
        <table class="table tablePersons mt-4" id="tablePersons">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>E-mail</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; ?>
                <?php foreach ($listpersons as $person) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $person['nama']; ?></td>
                        <td><?= $person['tempat_lahir']; ?></td>
                        <td><?= $person['tanggal_lahir']; ?></td>
                        <td><?= ($person['gender'] == 0) ? 'L' : 'P'; ?></td>
                        <td><?= $person['email']; ?></td>
                        <td>
                            <div class="d-inline">
                                <a href="/persons/<?= $person['id']; ?>" data-toggle="tooltip" data-placement="right" title="Klik untuk melihat detail data"><span class="btn btn-info btn-xs ">Details</span></a>
                                <form action="" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="button" class="btn btn-danger btn-xs" id="delete" data-id="<?= $person['id']; ?>" data-toggle="tooltip" data-placement="right" title="Klik untuk mengjapus data">Delete</button>
                                </form>
                                <!-- <a href="#" id="delete" class="btn btn-sm btn-warning">Delete</a> -->
                            </div>
                        </td>
                    </tr>
                <?php endforeach;  ?>
            </tbody>
        </table>



    </div>
</div>

<!-- Modal tambah data persons -->
<div class="modal fade" id="tambahDataPersons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/Persons/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap anda" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveAddPerson">Tambah data</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // load datatable
        function loadpersons() {
            var idpersons = '';
            var loadpersondata = $(".tablePersons").DataTable({
                pageLength: 5,
                // processing: true,
                responsive: true,
                paginate: true,
                serverSide: true,
                searching: true,
                destroy: true,
                ajax: {
                    url: '<?= base_url('persons/loaddatatablepersons') ?>',
                    type: 'POST',
                    success: function(data) {
                        console.log(data);
                    }
                },
            })
        }

        // loadpersons();

        $("#tablePersons_wrapper").addClass("mt-4")

        $("#delete").on('click', function() {
            var id = $(this).data('id')
            console.log(id)
            Swal.fire({
                type: 'question',
                title: 'Apakah data ini akan dihapus ?',
                showCancelButton: true,
                allowOutsideClick: false,
                confirmButtonText: `Ya, Hapus`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.value == true) {
                    $.ajax({
                        url: "<?= base_url('/persons/delete/'); ?>",
                        method: 'POST',
                        data: id,
                    })
                    Swal.fire('Data berhasil dihapus', '', 'success')
                } else {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        })
    })
</script>

<?= $this->endSection(); ?>