<div class="container-fluid">

<div class="d-sm-flex
align-items-center
justify-content-between
mb-4">

<h2 class="font-weight-bold text-primary">

<i class="fas fa-user-md mr-2"></i>

Tambah Dokter

</h2>

</div>

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card border-0 shadow-lg">

<div class="card-header
bg-gradient-primary
text-white py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-user mr-2"></i>

Form Data Dokter RS AN-NISA

</h5>

</div>

<div class="card-body p-4">

<form
method="post"
action="<?= site_url('dokter/simpan');?>">

<!-- NAMA DOKTER -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-user-md text-primary"></i>

Nama Dokter

</label>

<input
type="text"
name="nama_dokter"
class="form-control modern-input"

placeholder="Masukkan nama dokter..."

required>

</div>

<!-- SPESIALIS -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-stethoscope text-success"></i>

Spesialis

</label>

<select
name="spesialis"
class="form-control modern-input"
required>

<option value="">
-- Pilih Spesialis --
</option>

<option value="Umum">
Dokter Umum
</option>

<option value="Anak">
Dokter Anak
</option>

<option value="Penyakit Dalam">
Penyakit Dalam
</option>

<option value="Bedah">
Bedah
</option>

<option value="Gigi">
Gigi
</option>

<option value="Jantung">
Jantung
</option>

<option value="Kulit">
Kulit
</option>

<option value="Saraf">
Saraf
</option>

</select>

</div>

<!-- JADWAL -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-calendar-check text-danger"></i>

Jadwal Praktek

</label>

<input
type="text"
name="jadwal_praktek"
class="form-control modern-input"

placeholder="Contoh: Senin - Jumat | 08:00 - 14:00"

required>

</div>

<!-- BUTTON -->

<div class="text-right mt-4">

<a
href="<?= site_url('dokter');?>"
class="btn btn-secondary shadow-sm">

<i class="fas fa-arrow-left"></i>

Kembali

</a>

<button
type="submit"
class="btn btn-primary shadow">

<i class="fas fa-save"></i>

Simpan Dokter

</button>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

<style>

.bg-gradient-primary{

background:linear-gradient(
135deg,
#6dfc5d,
#60f382
);

}

.card{

border-radius:20px;

overflow:hidden;

}

.modern-input{

border-radius:12px;

padding:12px;

border:1px solid #d9d9d9;

transition:.3s;

}

.modern-input:focus{

border-color:#0d6efd;

box-shadow:0 0 12px rgba(13,110,253,.25);

}

.btn{

border-radius:12px;

font-weight:600;

padding:10px 20px;

}

</style>