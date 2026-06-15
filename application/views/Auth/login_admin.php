<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>RS AN-NISA | Login Admin </title>

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

.btn-login{
    height:55px;
    width:100%;
    border-radius:12px;
    border:none;
    font-weight:600;
    color:#fff;
    background:linear-gradient(135deg,#22c55e,#15803d);
}

.btn-login:hover{
    background:linear-gradient(135deg,#16a34a,#166534);
}

.bottom-link{
    text-align:center;
    margin-top:25px;
}

.bottom-link a{
    color:#15803d;
    font-weight:600;
    text-decoration:none;
}

.bottom-link a:hover{
    text-decoration:underline;
}

.security-box{
    margin-top:20px;
    background:#f0fdf4;
    border-left:4px solid #22c55e;
    padding:15px;
    border-radius:10px;
    color:#166534;
    font-size:14px;
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
<i class="fas fa-hospital"></i>
RS AN-NISA
</h1>

<p>
Portal administrator untuk mengelola data pasien,
dokter, jadwal pelayanan, rekam medis serta laporan
operasional rumah sakit secara terintegrasi.
</p>

<div class="info-box">

<p><i class="fas fa-users"></i> Kelola Data Pasien</p>

<p><i class="fas fa-user-md"></i> Kelola Data Dokter</p>

<p><i class="fas fa-calendar-check"></i> Manajemen Jadwal</p>

<p><i class="fas fa-chart-line"></i> Laporan & Monitoring</p>

</div>

</div>

</div>

<div class="col-lg-6">

<div class="right-side">

<div class="logo">
<i class="fas fa-user-shield"></i>
</div>

<div class="heading">
<h3>ADMIN LOGIN</h3>
<p>Masuk ke Dashboard Administrator</p>
</div>

<?php if($this->session->flashdata('error')): ?>
<div class="alert alert-danger text-center">
<?= $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>

<form method="post" action="<?= site_url('auth/proses_admin');?>">

<div class="form-group">
<label>Username</label>
<input type="text"
name="username"
class="form-control"
placeholder="Masukkan Username"
required>
</div>

<div class="form-group">
<label>Password</label>

<div class="input-group">

<input type="password"
name="password"
id="password"
class="form-control"
placeholder="Masukkan Password"
required>

<div class="input-group-append">

<button type="button"
class="btn btn-outline-secondary"
onclick="showPassword()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

<button type="submit" class="btn-login">
<i class="fas fa-sign-in-alt"></i>
 LOGIN ADMIN
</button>

</form>

<div class="security-box">
<i class="fas fa-lock"></i>
 Akses hanya diperuntukkan bagi administrator yang berwenang.
</div>

<div class="bottom-link">

<p class="mt-4">

<a href="<?= site_url('auth/login_pasien');?>">

<i class="fas fa-user"></i>
 Kembali ke Portal Pasien

</a>

</p>

</div>

</div>

</div>

</div>

</div>

</div>

<script>

function showPassword(){

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

