<div class="container-fluid">

<div class="d-sm-flex
align-items-center
justify-content-between
mb-4">

<h1 class="h3 mb-0 dashboard-title">

Dashboard Admin

</h1>

</div>

<div class="row">

<!-- TOTAL PASIEN -->

<div class="col-xl-3 col-md-6 mb-4">

<div class="card card-modern
border-left-primary
h-100 py-2">

<div class="card-body">

<div class="row
no-gutters
align-items-center">

<div class="col mr-2">

<div class="text-xs
font-weight-bold
text-primary
text-uppercase
mb-2">

Total Pasien

</div>

<div class="h4
mb-0
font-weight-bold
text-gray-800">

<?= $total_pasien; ?>

</div>

</div>

<div class="col-auto">

<i class="fas fa-user-injured
fa-3x
text-primary"></i>

</div>

</div>

</div>

</div>

</div>

<!-- DOKTER -->

<div class="col-xl-3 col-md-6 mb-4">

<div class="card card-modern
border-left-success
h-100 py-2">

<div class="card-body">

<div class="row
no-gutters
align-items-center">

<div class="col mr-2">

<div class="text-xs
font-weight-bold
text-success
text-uppercase
mb-2">

Dokter Aktif

</div>

<div class="h4
mb-0
font-weight-bold
text-gray-800">

<?= count($this->db->get('dokter')->result()); ?>

</div>

</div>

<div class="col-auto">

<i class="fas fa-user-md
fa-3x
text-success"></i>

</div>

</div>

</div>

</div>

</div>

<!-- PENDAFTARAN -->

<div class="col-xl-3 col-md-6 mb-4">

<div class="card card-modern
border-left-info
h-100 py-2">

<div class="card-body">

<div class="row
no-gutters
align-items-center">

<div class="col mr-2">

<div class="text-xs
font-weight-bold
text-info
text-uppercase
mb-2">

Pendaftaran

</div>

<div class="h4
mb-0
font-weight-bold
text-gray-800">

<?= $total_daftar; ?>

</div>

</div>

<div class="col-auto">

<i class="fas fa-calendar-check
fa-3x
text-info"></i>

</div>

</div>

</div>

</div>

</div>
<!-- DITOLAK -->

<div class="col-xl-3 col-md-6 mb-4">

<div class="card card-modern
border-left-warning
h-100 py-2">

<div class="card-body">

<div class="row
no-gutters
align-items-center">

<div class="col mr-2">

<div class="text-xs
font-weight-bold
text-warning
text-uppercase
mb-2">

Ditolak

</div>

<div class="h4
mb-0
font-weight-bold
text-gray-800">

<?= $total_tolak; ?>

</div>

</div>

<div class="col-auto">

<i class="fas fa-times-circle
fa-3x
text-warning"></i>

</div>

</div>

</div>

</div>

</div>
<!-- DISETUJUI -->

<div class="col-xl-3 col-md-6 mb-4">

<div class="card card-modern
border-left-danger
h-100 py-2">

<div class="card-body">

<div class="row
no-gutters
align-items-center">

<div class="col mr-2">

<div class="text-xs
font-weight-bold
text-danger
text-uppercase
mb-2">

Disetujui

</div>

<div class="h4
mb-0
font-weight-bold
text-gray-800">

<?= $total_setuju; ?>

</div>

</div>

<div class="col-auto">

<i class="fas fa-check-circle
fa-3x
text-danger"></i>

</div>

</div>

</div>

</div>

</div>

</div>

<!-- PANEL -->

<div class="row">

<div class="col-lg-12">

<div class="card card-modern mb-4">

<div class="card-body">

<h3 class="text-primary">

Selamat Datang,

<?= $this->session
->userdata('nama_admin');?>

</h3>

<hr>

<p>

Anda login sebagai
Admin Sistem Rumah Sakit.

Silahkan gunakan menu
sidebar untuk mengelola:

</p>

<ul>

<li>Data Pasien</li>

<li>Data Dokter</li>

<li>Pendaftaran Online</li>

<li>Status Persetujuan</li>

<li>Laporan PDF & CSV</li>

</ul>

</div>

</div>

</div>

</div>

</div>