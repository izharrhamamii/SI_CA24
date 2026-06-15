<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">

<h2 class="font-weight-bold text-primary">

<i class="fas fa-user-edit mr-2"></i>

Edit Data Pasienn

</h2>

</div>

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card border-0 shadow-lg">

<div class="card-header bg-gradient-primary text-white py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-user mr-2"></i>

Update Informasi Pasien

</h5>

</div>

<div class="card-body p-4">

<form
method="post"
action="<?= site_url('pasien/update/'.$pasien->id_pasien);?>">

<!-- NAMA -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-user text-primary"></i>

Nama Pasien

</label>

<input
type="text"
name="nama"
class="form-control modern-input"
value="<?= $pasien->nama;?>"
required>

</div>

<!-- TANGGAL -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-calendar-alt text-danger"></i>

Tanggal Lahir

</label>

<input
type="date"
name="tanggal_lahir"
class="form-control modern-input"
value="<?= $pasien->tanggal_lahir;?>"
required>

</div>

<!-- ALAMAT -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-map-marker-alt text-success"></i>

Alamat

</label>

<textarea
name="alamat"
class="form-control modern-input"
rows="4"
required><?= $pasien->alamat;?></textarea>

</div>

<!-- TELEPON -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-phone text-info"></i>

Telepon

</label>

<input
type="text"
name="telepon"
class="form-control modern-input"
value="<?= $pasien->telepon;?>"
required>

</div>

<!-- USERNAME -->

<div class="form-group">

<label class="font-weight-bold">

<i class="fas fa-user-circle text-warning"></i>

Username

</label>

<input
type="text"
name="username"
class="form-control modern-input"
value="<?= $pasien->username;?>"
required>

</div>

<!-- BUTTON -->

<div class="text-right mt-4">

<a
href="<?= site_url('pasien');?>"
class="btn btn-secondary shadow-sm">

<i class="fas fa-arrow-left"></i>

Kembali

</a>

<button
type="submit"
class="btn btn-warning shadow">

<i class="fas fa-save"></i>

Update Data

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
#000000,
#ffc400
);

}

.card{

border-radius:20px;

overflow:hidden;

}

.modern-input{

border-radius:12px;

padding:12px;

border:1px solid #dcdcdc;

transition:.3s;

}

.modern-input:focus{

border-color:#0d6efd;

box-shadow:0 0 12px rgba(13,110,253,.25);

}

.btn{

border-radius:12px;

padding:10px 20px;

font-weight:600;

}

</style>