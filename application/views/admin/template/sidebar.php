<style>

.sidebar{
background:linear-gradient(180deg,#22c55e,#15803d);
box-shadow:4px 0 20px rgba(0,0,0,.08);
}

.sidebar .nav-item .nav-link{
padding:14px 18px;
margin:4px 10px;
border-radius:12px;
transition:.3s;
font-weight:600;
color:rgba(255,255,255,.9)!important;
}

.sidebar .nav-item .nav-link i{
margin-right:10px;
font-size:15px;
width:20px;
text-align:center;
}

.sidebar .nav-item .nav-link:hover{
background:rgba(255,255,255,.18);
transform:translateX(4px);
color:#fff!important;
}

.sidebar .nav-item.active .nav-link{
background:#fff;
color:#15803d!important;
box-shadow:0 8px 20px rgba(0,0,0,.15);
}

.sidebar .nav-item.active .nav-link i{
color:#15803d!important;
}

.sidebar-heading{
color:rgba(255,255,255,.75)!important;
font-size:11px;
letter-spacing:2px;
padding-left:18px;
margin-top:10px;
font-weight:700;
}

.sidebar-brand{
height:90px;
font-size:22px;
font-weight:800;
color:#fff!important;
}

.sidebar-brand:hover{
color:#fff!important;
}

.sidebar-brand-icon{
font-size:30px;
}

.sidebar-divider{
border-color:rgba(255,255,255,.15);
}

</style>

<ul class="navbar-nav sidebar sidebar-dark accordion"
id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center"
href="<?= site_url('dashboard_admin');?>">

<div class="sidebar-brand-icon">
<i class="fas fa-hospital"></i>
</div>

<div class="sidebar-brand-text mx-2">
RS AN-NISA
</div>

</a>

<hr class="sidebar-divider my-0">

<li class="nav-item <?= ($this->uri->segment(1)=='dashboard_admin') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('dashboard_admin');?>">

<i class="fas fa-home"></i>
<span>Dashboard</span>

</a>

</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
MASTER DATA
</div>

<li class="nav-item <?= ($this->uri->segment(1)=='pasien_admin') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('pasien_admin');?>">

<i class="fas fa-user-injured"></i>
<span>Data Pasien</span>

</a>

</li>

<li class="nav-item <?= ($this->uri->segment(1)=='dokter') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('dokter');?>">

<i class="fas fa-user-md"></i>
<span>Data Dokter</span>

</a>

</li>

<li class="nav-item <?= ($this->uri->segment(1)=='pendaftaran_admin') ? 'active' : ''; ?>">

<a class="nav-link"
href="<?= site_url('pendaftaran_admin');?>">

<i class="fas fa-calendar-check"></i>
<span>Pendaftaran</span>

</a>

</li>

<hr class="sidebar-divider">

<div class="sidebar-heading">
LAPORAN
</div>

<li class="nav-item">

<a class="nav-link"
href="<?= site_url('laporan/csv');?>">

<i class="fas fa-file-csv"></i>
<span>Export CSV</span>

</a>

</li>

<li class="nav-item">

<a class="nav-link"
href="<?= site_url('laporan/pdf');?>">

<i class="fas fa-file-pdf"></i>
<span>Export PDF</span>

</a>

</li>

<hr class="sidebar-divider">

<li class="nav-item">

<a class="nav-link"
href="<?= site_url('logout');?>">

<i class="fas fa-sign-out-alt"></i>
<span>Logout</span>

</a>

</li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">

