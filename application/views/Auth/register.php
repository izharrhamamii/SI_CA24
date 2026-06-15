
<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>Register Pasien | RS AN-NISA</title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
rel="stylesheet">

<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>"
rel="stylesheet">

<style>

body{
background:linear-gradient(135deg,#0052D4,#4364F7,#6FB1FC);
font-family:'Segoe UI',sans-serif;
min-height:100vh;
}

.wrapper{
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
padding:30px;
}

.register-card{
width:100%;
max-width:1200px;
border-radius:35px;
overflow:hidden;
background:rgba(255,255,255,.15);
backdrop-filter:blur(16px);
box-shadow:0 25px 55px rgba(0,0,0,.25);
}

.left-panel{

background:
linear-gradient(
rgba(0,45,115,.85),
rgba(0,102,255,.80)
),

url('https://images.unsplash.com/photo-1579684385127-1ef15d508118');

background-size:cover;
background-position:center;

padding:70px 50px;

color:white;
}

.left-panel h1{
font-size:42px;
font-weight:800;
}

.left-panel p{
margin-top:25px;
line-height:1.9;
font-size:17px;
}

.feature{
margin-top:35px;
}

.feature p{
font-size:17px;
}

.feature i{
font-size:24px;
margin-right:12px;
color:#8ce7ff;
}

.right-panel{
background:white;
padding:45px;
}

.logo{
width:95px;
height:95px;
border-radius:50%;
margin:auto;

display:flex;
justify-content:center;
align-items:center;

background:linear-gradient(
135deg,
#0052D4,
#4364F7
);

color:white;
font-size:34px;
}

.heading{
text-align:center;
margin-top:20px;
margin-bottom:30px;
}

.heading h3{
color:#0052D4;
font-weight:800;
}

.form-control,
textarea{
border-radius:15px;
}

.btn-register{

height:54px;
border:none;
border-radius:35px;

font-size:17px;
font-weight:700;

background:linear-gradient(
135deg,
#0052D4,
#4364F7
);

}

.btn-register:hover{
transform:translateY(-2px);
}

.alert{
border-radius:15px;
}

.bottom-link{
text-align:center;
margin-top:25px;
}

.bottom-link a{
font-weight:700;
color:#0052D4;
}

@media(max-width:991px){

.left-panel{
display:none;
}

.right-panel{
padding:30px 20px;
}

}

</style>

</head>

<body>

<div class="wrapper">

<div class="register-card">

<div class="row no-gutters">

<!-- LEFT -->

<div class="col-lg-5">

<div class="left-panel">

<h1>

<i class="fas fa-hospital-user"></i>

RS AN-NISA

</h1>

<p>

Daftar akun pasien untuk menikmati
layanan digital rumah sakit,
pendaftaran online,
pilih dokter spesialis,
dan monitoring status kunjungan.

</p>

<div class="feature">

<p>

<i class="fas fa-user-plus"></i>

Registrasi Online Cepat

</p>

<p>

<i class="fas fa-user-md"></i>

Pilih Dokter Spesialis

</p>

<p>

<i class="fas fa-calendar-check"></i>

Atur Jadwal Berobat

</p>

<p>

<i class="fas fa-notes-medical"></i>

Cek Status Pendaftaran

</p>

</div>

</div>

</div>

<!-- RIGHT -->

<div class="col-lg-7">

<div class="right-panel">

<div class="logo">

<i class="fas fa-user-plus"></i>

</div>

<div class="heading">

<h3>REGISTER PASIEN</h3>

<p class="text-muted">

Lengkapi data akun pasien anda

</p>

</div>

<?php if(validation_errors()): ?>

<div class="alert alert-danger">

<?= validation_errors(); ?>

</div>

<?php endif; ?>

<form
method="post"
action="<?= site_url('auth/simpan_register');?>">

<div class="form-row">

<div class="form-group col-md-6">

<label>Nama Lengkap</label>

<input
type="text"
name="nama"
class="form-control"
value="<?= set_value('nama');?>"
required>

</div>

<div class="form-group col-md-6">

<label>Tanggal Lahir</label>

<input
type="date"
name="tanggal_lahir"
class="form-control"
value="<?= set_value('tanggal_lahir');?>"
required>

</div>

</div>

<div class="form-group">

<label>Alamat</label>

<textarea
name="alamat"
rows="3"
class="form-control"
required><?= set_value('alamat');?></textarea>

</div>

<div class="form-group">

<label>No Telepon</label>

<input
type="text"
name="telepon"
class="form-control"
value="<?= set_value('telepon');?>"
required>

</div>

<div class="form-row">

<div class="form-group col-md-6">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
value="<?= set_value('username');?>"
required>

</div>

<div class="form-group col-md-6">

<label>Password</label>

<div class="input-group">

<input
type="password"
name="password"
id="password"
class="form-control"
required>

<div class="input-group-append">

<button
type="button"
class="btn btn-outline-secondary"
onclick="showPass()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

</div>

<button
type="submit"
class="btn btn-primary btn-block btn-register">

<i class="fas fa-save"></i>

DAFTAR SEKARANG

</button>

</form>

<div class="bottom-link">

<p class="mt-4">

Sudah punya akun?

<a href="<?= site_url('login-pasien');?>">

Login Disini

</a>

</p>

</div>

</div>

</div>

</div>

</div>

</div>

<script>

function showPass(){

var x=
document.getElementById(
'password'
);

if(x.type==="password")
{
x.type="text";
}
else
{
x.type="password";
}

}

</script>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>
</html>
