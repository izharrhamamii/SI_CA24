<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register Pasien | RS AN-NISA</title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html,
body{
    min-height:100%;
    overflow-y:auto;
}

body{

    font-family:'Segoe UI',sans-serif;

    background:
    linear-gradient(
    135deg,
    #0f172a,
    #1e293b,
    #334155
    );

    overflow-x:hidden;
}

.wrapper{

    min-height:100vh;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:40px 15px;
}

.register-card{

    width:100%;
    max-width:750px;

    background:#ffffff;

    border-radius:30px;

    padding:45px;

    box-shadow:
    0 25px 60px rgba(0,0,0,.35);

}

.logo{

    width:110px;
    height:110px;

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

    color:#0f172a;

    font-size:45px;

    box-shadow:
    0 10px 30px rgba(212,175,55,.35);

}

.heading{

    text-align:center;

    margin-top:25px;
    margin-bottom:35px;
}

.heading h3{

    font-weight:800;

    color:#0f172a;

    margin-bottom:8px;
}

.heading p{

    color:#64748b;

    margin:0;
}

.form-group{

    margin-bottom:20px;
}

.form-group label{

    font-weight:700;

    color:#0f172a;
}

.form-control,
textarea{

    border-radius:15px;

    border:1px solid #d1d5db;
}

.form-control:focus,
textarea:focus{

    border-color:#fbbf24;

    box-shadow:
    0 0 0 .2rem
    rgba(251,191,36,.20);

}

.input-group-append .btn{

    border-radius:
    0 15px 15px 0;
}

.btn-register{

    width:100%;
    height:58px;

    border:none;

    border-radius:15px;

    font-size:16px;
    font-weight:700;

    color:#111827;

    background:
    linear-gradient(
    135deg,
    #d4af37,
    #fbbf24
    );

    transition:.3s;
}

.btn-register:hover{

    transform:
    translateY(-2px);

    box-shadow:
    0 10px 25px rgba(212,175,55,.30);

}

.info-box{

    margin-top:20px;

    padding:15px;

    background:#f8fafc;

    border-left:5px solid #fbbf24;

    border-radius:12px;

    color:#334155;
}

.bottom-link{

    text-align:center;

    margin-top:25px;
}

.bottom-link a{

    text-decoration:none;

    font-weight:700;

    color:#0f172a;
}

.bottom-link a:hover{

    color:#d4af37;
}

.alert{

    border-radius:12px;
}

@media(max-width:576px){

.register-card{

    padding:25px;
}

.logo{

    width:85px;
    height:85px;

    font-size:35px;
}

.heading h3{

    font-size:24px;
}

}

</style>

</head>

<body>

<div class="wrapper">

<div class="register-card">

<div class="logo">

<i class="fas fa-user-plus"></i>

</div>

<div class="heading">

<h3>REGISTER PASIEN</h3>

<p>
Lengkapi data untuk membuat akun pasien
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
onclick="showPassword()">

<i class="fas fa-eye"></i>

</button>

</div>

</div>

</div>

</div>

<button
type="submit"
class="btn-register">

<i class="fas fa-user-plus"></i>

DAFTAR SEKARANG

</button>

</form>

<div class="info-box">

<i class="fas fa-shield-alt"></i>

Data pasien akan disimpan secara aman dan hanya digunakan untuk kebutuhan pelayanan rumah sakit.

</div>

<div class="bottom-link">

<p class="mt-4">

Sudah memiliki akun?

<a href="<?= site_url('auth/login_pasien');?>">

Login Sekarang

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