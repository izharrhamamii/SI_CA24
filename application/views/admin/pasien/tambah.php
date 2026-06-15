<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">

<h2 class="font-weight-bold text-primary">

<i class="fas fa-user-plus mr-2"></i>

Tambah Data Pasien

</h2>

</div>

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card border-0 shadow-lg">

<div class="card-header bg-gradient-primary text-white py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-user mr-2"></i>

Form Tambah Pasien RS AN-NISA

</h5>

</div>

<div class="card-body p-4">

<form
method="post"
action="<?= site_url('pasien/simpan');?>">

<!-- NAMA -->

<div class="form-group">

<label>

<i class="fas fa-user text-primary"></i>

Nama Pasien

</label>

<input
type="text"
name="nama"
class="form-control"
placeholder="Masukkan nama pasien"
required>

</div>

<!-- TGL LAHIR -->

<div class="form-group">

<label>

<i class="fas fa-calendar-alt text-danger"></i>

Tanggal Lahir

</label>

<input
type="date"
name="tanggal_lahir"
class="form-control"
required>

</div>

<!-- ALAMAT -->

<div class="form-group">

<label>

<i class="fas fa-map-marker-alt text-success"></i>

Alamat

</label>

<textarea
name="alamat"
class="form-control"
rows="4"
placeholder="Masukkan alamat pasien"
required></textarea>

</div>

<!-- TELEPON -->

<div class="form-group">

<label>

<i class="fas fa-phone text-info"></i>

Telepon

</label>

<input
type="text"
name="telepon"
class="form-control"
placeholder="08xxxxxxxxxx"
required>

</div>

<!-- USERNAME -->

<div class="form-group">

<label>

<i class="fas fa-user-circle text-warning"></i>

Username

</label>

<input
type="text"
name="username"
class="form-control"
placeholder="Masukkan username"
required>

</div>

<!-- PASSWORD -->

<div class="form-group">

<label>

<i class="fas fa-lock text-secondary"></i>

Password

</label>

<div class="input-group">

<input
type="password"
name="password"
id="password"
class="form-control"
placeholder="Masukkan password"
required>

<div class="input-group-append">

<button
type="button"
class="btn btn-outline-primary"
onclick="showPass()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

<hr>

<div class="text-right">

<a
href="<?= site_url('pasien');?>"
class="btn btn-secondary shadow-sm">

<i class="fas fa-arrow-left"></i>

Kembali

</a>

<button
type="submit"
class="btn btn-primary shadow">

<i class="fas fa-save"></i>

Simpan Data

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
#66ec66,
#66f37d
);

}

.card{

border-radius:20px;

overflow:hidden;

}

.form-control{

border-radius:12px;

padding:12px;

}

.btn{

border-radius:10px;

font-weight:600;

}

.form-control:focus{

box-shadow:0 0 10px rgba(13,110,253,.25);

border-color:#0d6efd;

}

</style>

<script>

function showPass(){

var x=document.getElementById('password');

if(x.type==="password"){

x.type="text";

}else{

x.type="password";

}

}

</script>