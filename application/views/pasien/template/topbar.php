<nav
class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow-sm border-left-success">

<!-- TITLE -->

<div class="d-flex align-items-center">

<div
class="rounded-circle bg-success text-white d-flex justify-content-center align-items-center mr-3"
style="width:45px;height:45px;">

<i class="fas fa-hospital-user"></i>

</div>

<div>

<h4 class="m-0 font-weight-bold text-success">

RS AN-NISA

</h4>

<small class="text-muted">

Portal Pasien Online

</small>

</div>

</div>

<!-- RIGHT SIDE -->

<ul class="navbar-nav ml-auto align-items-center">

<li class="nav-item dropdown no-arrow">

<a
class="nav-link dropdown-toggle"
href="#"
role="button"
data-toggle="dropdown">

<span class="mr-3 text-gray-700 font-weight-bold">

<?= $this->session->userdata('nama'); ?>

</span>

<img
class="img-profile rounded-circle shadow"
src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
width="45">

</a>

<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">

<div class="dropdown-header text-success">

AKUN PASIEN

</div>

<a
class="dropdown-item"
href="<?= site_url('dashboard_pasien');?>">

<i class="fas fa-home fa-sm mr-2 text-success"></i>

Dashboard

</a>

<a
class="dropdown-item"
href="<?= site_url('pendaftaran/status');?>">

<i class="fas fa-file-medical fa-sm mr-2 text-info"></i>

Status Berobat

</a>

<div class="dropdown-divider"></div>

<a
class="dropdown-item text-danger"
href="<?= site_url('logout');?>">

<i class="fas fa-sign-out-alt fa-sm mr-2"></i>

Logout

</a>

</div>

</li>

</ul>

</nav>