<ul
class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion shadow-lg"
id="accordionSidebar">

<!-- BRAND -->
<a class="sidebar-brand d-flex align-items-center justify-content-center py-4"
href="<?= site_url('dashboard_pasien');?>">

<div class="sidebar-brand-icon">

<i class="fas fa-hospital-user fa-2x"></i>

</div>

<div class="sidebar-brand-text mx-2">

RS AN-NISA

<br>

<small style="font-size:11px;letter-spacing:1px;">

PORTAL PASIEN

</small>

</div>

</a>

<hr class="sidebar-divider mt-0">

<div class="sidebar-heading">

MENU UTAMA

</div>

<!-- DASHBOARD -->

<li class="nav-item <?= ($this->uri->segment(1)=='dashboard_pasien')?'active':'';?>">

<a class="nav-link"
href="<?= site_url('dashboard_pasien');?>">

<i class="fas fa-home"></i>

<span>Dashboard</span>

</a>

</li>

<!-- PENDAFTARAN -->

<li class="nav-item <?= ($this->uri->segment(1)=='pendaftaran' && $this->uri->segment(2)=='')?'active':'';?>">

<a class="nav-link"
href="<?= site_url('pendaftaran');?>">

<i class="fas fa-notes-medical"></i>

<span>Pendaftaran</span>

</a>

</li>

<!-- STATUS -->

<li class="nav-item <?= ($this->uri->segment(2)=='status')?'active':'';?>">

<a class="nav-link"
href="<?= site_url('pendaftaran/status');?>">

<i class="fas fa-file-medical-alt"></i>

<span>Status Berobat</span>

</a>

</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">

AKUN PASIEN

</div>

<!-- MINI PROFILE -->

<li class="nav-item px-3 mb-3">

<div class="card border-0 shadow-sm">

<div class="card-body text-center py-3">

<img
src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
width="68"
class="rounded-circle shadow mb-2">

<h6 class="text-success font-weight-bold mb-1">

<?= $this->session->userdata('nama');?>

</h6>

<small class="text-muted">

RS AN-NISA  Patient Portal

</small>

</div>

</div>

</li>

<!-- LOGOUT -->

<li class="nav-item">

<a class="nav-link text-warning"
href="<?= site_url('logout');?>">

<i class="fas fa-sign-out-alt"></i>

<span>Logout</span>

</a>

</li>

<hr class="sidebar-divider d-none d-md-block">

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">