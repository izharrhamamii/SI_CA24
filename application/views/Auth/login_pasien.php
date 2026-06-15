<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login Pasien | RS AN-NISA</title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

<style>

body{
    min-height:100vh;
    font-family:'Segoe UI',sans-serif;
    background:linear-gradient(135deg,#dcfce7,#f0fdf4,#ecfdf5);
    overflow-x:hidden;
}

.wrapper{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px 15px;
}

.login-card{
    width:100%;
    max-width:1150px;
    background:#fff;
    border-radius:30px;
    overflow:hidden;
    box-shadow:0 20px 50px rgba(0,0,0,.12);
}

.left-side{
    background:linear-gradient(135deg,#22c55e,#15803d);
    color:#fff;
    padding:70px 50px;
    height:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.left-side h1{
    font-size:42px;
    font-weight:700;
    margin-bottom:20px;
}

.left-side p{
    font-size:16px;
    line-height:1.8;
}

.info-box{
    margin-top:30px;
}

.info-box p{
    background:rgba(255,255,255,.15);
    padding:14px 18px;
    border-radius:12px;
    margin-bottom:12px;
    backdrop-filter:blur(10px);
}

.right-side{
    padding:60px;
    background:#fff;
}

.logo{
    width:90px;
    height:90px;
    border-radius:50%;
    background:#dcfce7;
    color:#15803d;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
    margin-bottom:20px;
    font-size:42px;
}

.heading{
    text-align:center;
    margin-bottom:30px;
}

.heading h3{
    font-weight:700;
    color:#14532d;
}

.heading p{
    color:#64748b;
}

.form-group label{
    font-weight:600;
    color:#14532d;
}

.form-control{
    height:52px;
    border-radius:12px;
    border:1px solid #d1d5db;
}

.form-control:focus{
    border-color:#22c55e;
    box-shadow:0 0 0 .2rem rgba(34,197,94,.15);
}

.input-group-append .btn{
    border-radius:0 12px 12px 0;
}

.btn-login{
    height:55px;
    border-radius:12px;
    border:none;
    font-weight:600;
    background:linear-gradient(135deg,#22c55e,#15803d);
    transition:.3s;
}

.btn-login:hover{
    background:linear-gradient(135deg,#16a34a,#166534);
    transform:translateY(-2px);
}

.alert{
    border-radius:12px;
}

.bottom-link{
    text-align:center;
    margin-top:25px;
}

.bottom-link p{
    color:#64748b;
}

.bottom-link a{
    color:#15803d;
    font-weight:600;
    text-decoration:none;
}

.bottom-link a:hover{
    text-decoration:underline;
}

.left-side::after{
    content:"\f0f0";
    font-family:"Font Awesome 5 Free";
    font-weight:900;
    font-size:180px;
    color:rgba(255,255,255,.12);
    text-align:center;
    margin-top:30px;
}

@media(max-width:991px){

    .left-side{
        padding:40px 30px;
        text-align:center;
    }

    .left-side h1{
        font-size:32px;
    }

    .right-side{
        padding:40px 25px;
    }

    .left-side::after{
        font-size:120px;
    }

}

</style>

</head>

<body>

<div class="wrapper">

<div class="login-card">

<div class="row no-gutters">

<div class="col-lg-6">

<div class="left-side">

<h1>
<i class="fas fa-user-circle"></i>
RS AN-NISA
</h1>

<p>
Akses layanan kesehatan digital secara mudah dan cepat.
Kelola jadwal pemeriksaan, pendaftaran online, riwayat
kunjungan, serta informasi pelayanan rumah sakit dalam
satu platform terintegrasi.
</p>

<div class="info-box">

<p>
<i class="fas fa-calendar-check"></i>
Booking Pemeriksaan Online
</p>

<p>
<i class="fas fa-user-md"></i>
Pilih Dokter Spesialis
</p>

<p>
<i class="fas fa-file-medical-alt"></i>
Riwayat Pelayanan
</p>

<p>
<i class="fas fa-bell"></i>
Notifikasi Jadwal Kunjungan
</p>

</div>

</div>

</div>

<div class="col-lg-6">

<div class="right-side">

<div class="logo">
<i class="fas fa-heartbeat"></i>
</div>

<div class="heading">

<h3>PASIEN LOGIN</h3>

<p>
Masuk untuk mengakses akun pasien
</p>

</div>

<?php if($this->session->flashdata('error')): ?>

<div class="alert alert-danger text-center">

<?= $this->session->flashdata('error'); ?>

</div>

<?php endif; ?>

<?php if($this->session->flashdata('success')): ?>

<div class="alert alert-success text-center">

<?= $this->session->flashdata('success'); ?>

</div>

<?php endif; ?>

<form method="post"
action="<?= site_url('auth/proses_pasien');?>">

<div class="form-group">

<label>Username</label>

<input
type="text"
name="username"
class="form-control"
placeholder="Masukkan Username"
required>

</div>

<div class="form-group">

<label>Password</label>

<div class="input-group">

<input
type="password"
name="password"
id="password"
class="form-control"
placeholder="Masukkan Password"
required>

<div class="input-group-append">

<button
type="button"
class="btn btn-outline-secondary"
onclick="lihatPassword()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

<button
type="submit"
class="btn btn-primary btn-block btn-login">

<i class="fas fa-sign-in-alt"></i>
 LOGIN

</button>

</form>

<div class="bottom-link">

<p class="mt-4">

Belum memiliki akun?

<a href="<?= site_url('auth/register');?>">

Daftar Sekarang

</a>

</p>

<p>

<a href="<?= site_url('auth/login_admin');?>">

<i class="fas fa-user-shield"></i>

Login Admin

</a>

</p>

</div>

</div>

</div>

</div>

</div>

</div>

<script>

function lihatPassword(){

var x=document.getElementById("password");

if(x.type==="password"){
    x.type="text";
}else{
    x.type="password";
}

}

</script>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>

