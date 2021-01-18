<?= $this->extend('template_views/template'); ?>
<?= $this->section('content'); ?>
<div class="row mt-4">
    <div class="col">
        <h2 class="my-4">Tambah data baru dengan mengisi form di bawah ini</h2>
        <form action="/Persons/save" method="post">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= old('nama'); ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="tempat_lahir" name="tempat_lahir" placeholder="Kota tempat lahir" value="<?= old('tempat_lahir'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tempat_lahir'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?> datepicker" id="tanggal_lahir" name="tanggal_lahir" placeholder="Hari/Bulan/Tahun" value="<?= old('tanggal_lahir'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('tanggal_lahir'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="custom-select d-block my-3 <?= ($validation->hasError('gender')) ? 'is-invalid' : ''; ?> gender" id="gender" name="gender" required>
                        <option value="">-- Pilih --</option>
                        <option value="0" <?= (old('gender') == '0') ? 'selected' : ''; ?>>Laki - laki</option>
                        <option value="1" <?= (old('gender') == '1') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                    <div class="invalid-feedback">
                        <?= $validation->getError('gender'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">E - mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?> " id="email" name="email" placeholder="example@contoh.com" value="<?= old('email'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".datepicker").datepicker({
            format: "dd/mm/yyyy",
            autoclose: true
        })

        // $(".gender").on('change', function() {
        //     var gender = $(this).val()
        //     console.log(gender)
        //     $(".gender option[value=gender]").attr("selected", "selected")
        //     alert('nilai' + gender)
        // })
    })
</script>
<?= $this->endSection(); ?>