<div class="container-fluid">

<div class="d-sm-flex
align-items-center
justify-content-between
mb-4">

<h2 class="font-weight-bold text-success">

<i class="fas fa-hospital-user mr-2"></i>

Dashboard Pasien

</h2>

</div>

<!-- HERO WELCOME -->

<div class="card border-0 shadow-lg mb-4 hero-card">

<div class="card-body p-4">

<div class="row align-items-center">

<div class="col-lg-8">

<h2 class="font-weight-bold text-white">

Halo,

<?= $this->session->userdata('nama'); ?>

👋

</h2>

<p class="text-light mb-0">

Selamat datang di

<b>Portal Pasien RS AN-NISA</b>.

Kelola pendaftaran berobat, pilih dokter,
dan pantau status kunjungan anda.

</p>

</div>

<div class="col-lg-4 text-center">

<i class="fas fa-user-nurse hero-icon"></i>

</div>

</div>

</div>

</div>

<div class="row">

<!-- CARD 1 -->

<div class="col-lg-4 mb-4">

<div class="card dashboard-card
border-0 shadow-lg">

<div class="card-body text-center p-4">

<div class="icon-circle bg-success">

<i class="fas fa-user"></i>

</div>

<h4 class="mt-3">

Profil Pasien

</h4>

<hr>

<h5 class="text-success">

<?= $this->session->userdata('nama'); ?>

</h5>

<p class="text-muted">

Portal layanan pasien
RS AN-NISA.

</p>

</div>

</div>

</div>

<!-- CARD 2 -->

<div class="col-lg-4 mb-4">

<div class="card dashboard-card
border-0 shadow-lg">

<div class="card-body text-center p-4">

<div class="icon-circle bg-primary">

<i class="fas fa-calendar-plus"></i>

</div>

<h4 class="mt-3">

Pendaftaran Online

</h4>

<hr>

<p class="text-muted">

Daftar kunjungan dokter
secara online dengan mudah.

</p>

<a
href="<?= site_url('pendaftaran');?>"

class="btn btn-primary btn-block">

<i class="fas fa-paper-plane"></i>

Daftar Sekarang

</a>

</div>

</div>

</div>

<!-- CARD 3 -->

<div class="col-lg-4 mb-4">

<div class="card dashboard-card
border-0 shadow-lg">

<div class="card-body text-center p-4">

<div class="icon-circle bg-warning">

<i class="fas fa-file-medical-alt"></i>

</div>

<h4 class="mt-3">

Status Pendaftaran

</h4>

<hr>

<p class="text-muted">

Pantau approval admin
dan status pendaftaran anda.

</p>

<a
href="<?= site_url('pendaftaran/status');?>"

class="btn btn-warning btn-block text-white">

<i class="fas fa-search"></i>

Lihat Status

</a>

</div>

</div>

</div>

</div>

</div>

<style>

.hero-card{

background:linear-gradient(
135deg,
#198754,
#20c997
);

border-radius:22px;

overflow:hidden;

}

.hero-icon{

font-size:100px;

color:hsla(0, 33%, 99%, 0.35);

}

.dashboard-card{

border-radius:20px;

transition:.3s;

overflow:hidden;

}

.dashboard-card:hover{

transform:translateY(-8px);

}

.icon-circle{

width:80px;

height:80px;

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

margin:auto;

color:white;

font-size:30px;

}

.btn{

border-radius:12px;

font-weight:600;

padding:10px;

}

</style>