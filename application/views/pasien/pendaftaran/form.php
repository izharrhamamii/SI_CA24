<div class="container-fluid">

<div class="d-sm-flex
align-items-center
justify-content-between
mb-4">

<h2 class="font-weight-bold text-success">

<i class="fas fa-notes-medical mr-2"></i>

Pendaftaran Berobat Online

</h2>

</div>

<div class="row justify-content-center">

<div class="col-lg-9">

<div class="card border-0 shadow-lg">

<div class="card-header
bg-gradient-success
text-white py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-user mr-2"></i>

Form Pendaftaran Pasien RS AN-NISA

</h5>

</div>

<div class="card-body p-4">

<?php if(validation_errors()): ?>

<div class="alert alert-danger shadow-sm">

<i class="fas fa-exclamation-circle mr-2"></i>

<?= validation_errors(); ?>

</div>

<?php endif; ?>

<form
method="post"
action="<?= site_url('pendaftaran/simpan');?>">

<!-- DOKTER -->

<div class="form-group">

<label class="font-weight-bold text-dark">

<i class="fas fa-user-md text-success"></i>

Pilih Dokter Spesialis

</label>

<select
name="id_dokter"
class="form-control modern-input"
required>

<option value="">

-- Pilih Dokter --

</option>

<?php foreach($dokter as $d): ?>

<option
value="<?= $d->id_dokter;?>"

<?= set_select(
'id_dokter',
$d->id_dokter
); ?>

>

<?= $d->nama_dokter; ?>

-

<?= $d->spesialis; ?>

</option>

<?php endforeach; ?>

</select>

</div>

<!-- TANGGAL -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-calendar-alt text-primary"></i>

Tanggal Kunjungan

</label>

<input
type="date"
name="tanggal_kunjungan"
class="form-control modern-input"

value="<?= set_value('tanggal_kunjungan');?>"

required>

</div>

<!-- JAM -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-clock text-warning"></i>

Jam Kunjungan

</label>

<input
type="time"
name="jam_kunjungan"
class="form-control modern-input"

value="<?= set_value('jam_kunjungan');?>"

required>

</div>

<!-- KELUHAN -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-comment-medical text-danger"></i>

Keluhan Penyakit

</label>

<textarea
name="keluhan"
rows="5"
class="form-control modern-input"

placeholder="Tuliskan keluhan penyakit anda..."

required><?= set_value('keluhan');?></textarea>

</div>

<!-- BUTTON -->

<div class="text-right mt-4">

<a
href="<?= site_url('dashboard_pasien');?>"
class="btn btn-secondary shadow-sm">

<i class="fas fa-arrow-left"></i>

Kembali

</a>

<button
type="submit"
class="btn btn-success shadow">

<i class="fas fa-paper-plane"></i>

Daftar Sekarang

</button>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

<style>

.bg-gradient-success{

background:linear-gradient(
135deg,
#198754,
#20c997
);

}

.card{

border-radius:22px;

overflow:hidden;

}

.modern-input{

border-radius:12px;

padding:12px;

border:1px solid #d7d7d7;

transition:.3s;

}

.modern-input:focus{

border-color:#198754;

box-shadow:0 0 12px rgba(25,135,84,.25);

}

.btn{

border-radius:12px;

padding:10px 22px;

font-weight:600;

}

.alert{

border-radius:12px;

}

</style>