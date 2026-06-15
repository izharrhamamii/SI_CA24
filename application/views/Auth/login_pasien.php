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
    margin:0;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    linear-gradient(
    135deg,
    #0f172a,
    #1e293b,
    #334155
    );
    font-family:'Segoe UI',sans-serif;
}

.wrapper{
    width:100%;
    padding:20px;
}

.login-card{

    width:100%;
    max-width:500px;

    margin:auto;

    background:#ffffff;

    border-radius:25px;

    padding:45px;

    box-shadow:
    0 25px 60px
    rgba(0,0,0,.35);

}

.logo{

    width:100px;
    height:100px;

    border-radius:50%;

    margin:auto;

    display:flex;
    justify-content:center;
    align-items:center;

    background:
    linear-gradient(
    135deg,
    #d4af37,
    #fbbf24
    );

    color:#111827;

    font-size:42px;

}

.heading{
    text-align:center;
    margin-top:25px;
    margin-bottom:35px;
}

.heading h3{
    font-weight:800;
    color:#0f172a;
    margin-bottom:10px;
}

.heading p{
    color:#64748b;
    margin:0;
}

.form-group label{
    font-weight:600;
    color:#0f172a;
}

.form-control{
    height:52px;
    border-radius:12px;
}

.form-control:focus{

    border-color:#fbbf24;

    box-shadow:
    0 0 0 .2rem
    rgba(251,191,36,.25);

}

.btn-login{

    width:100%;
    height:55px;

    border:none;
    border-radius:12px;

    font-weight:700;

    color:#111827;

    background:
    linear-gradient(
    135deg,
    #d4af37,
    #fbbf24
    );

}

.btn-login:hover{
    opacity:.95;
}

.alert{
    border-radius:12px;
}

.info-box{

    margin-top:20px;

    padding:15px;

    border-radius:12px;

    background:#f8fafc;

    border-left:5px solid #fbbf24;

    color:#334155;

}

.bottom-link{
    text-align:center;
    margin-top:25px;
}

.bottom-link a{
    font-weight:600;
    color:#0f172a;
    text-decoration:none;
}

.bottom-link a:hover{
    color:#d4af37;
}

@media(max-width:576px){

.login-card{
    padding:30px 20px;
}

.logo{
    width:80px;
    height:80px;
    font-size:32px;
}

}

</style>

</head>

<body>

<div class="wrapper">

<div class="login-card">

<div class="logo">

<i class="fas fa-heartbeat"></i>

</div>

<div class="heading">

<h3>LOGIN PASIEN</h3>

<p>
Portal Pasien Rumah Sakit AN-NISA
</p>

</div>

<?php if($this->session->flashdata('error')): ?>

<div class="alert alert-danger">

<?= $this->session->flashdata('error'); ?>

</div>

<?php endif; ?>

<?php if($this->session->flashdata('success')): ?>

<div class="alert alert-success">

<?= $this->session->flashdata('success'); ?>

</div>

<?php endif; ?>

<form
method="post"
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
onclick="showPassword()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

<button
type="submit"
class="btn-login">

<i class="fas fa-sign-in-alt"></i>

LOGIN PASIEN

</button>

</form>

<div class="info-box">

<i class="fas fa-info-circle"></i>

Silahkan login menggunakan akun pasien yang telah terdaftar untuk mengakses layanan rumah sakit.

</div>

<div class="bottom-link">

<p class="mt-4">

Belum memiliki akun?

<a href="<?= site_url('auth/register');?>">

Daftar Sekarang

</a>

</p>

<p>

<a href="<?= site_url('auth/login_admin');?>">

Login Sebagai Admin

</a>

</p>

</div>

</div>

</div>

<script>

function showPassword(){

var x=document.getElementById('password');

if(x.type==='password'){
    x.type='text';
}else{
    x.type='password';
}

}

</script>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>
</html>