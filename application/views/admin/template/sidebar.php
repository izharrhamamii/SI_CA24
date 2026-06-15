<style>

.sidebar{
    background:linear-gradient(180deg,#0f172a,#1e293b,#334155);
    box-shadow:6px 0 25px rgba(0,0,0,.25);
}

.sidebar-brand{
    height:90px;
    color:#fbbf24 !important;
    font-size:22px;
    font-weight:800;
    border-bottom:1px solid rgba(255,255,255,.08);
}

.sidebar-brand-icon{
    font-size:30px;
}

.sidebar-brand-text{
    letter-spacing:1px;
}

.sidebar-divider{
    border-color:rgba(255,255,255,.08);
}

.sidebar-heading{
    color:#94a3b8 !important;
    font-size:11px;
    letter-spacing:2px;
    font-weight:700;
    padding-left:18px;
    margin-top:10px;
}

.sidebar .nav-item{
    margin:4px 10px;
}

.sidebar .nav-item .nav-link{
    color:#e2e8f0 !important;
    padding:14px 18px;
    border-radius:12px;
    transition:.3s;
    font-weight:600;
}

.sidebar .nav-item .nav-link i{
    width:22px;
    text-align:center;
    margin-right:10px;
    color:#fbbf24;
}

.sidebar .nav-item .nav-link:hover{
    background:rgba(251,191,36,.12);
    color:#fff !important;
    transform:translateX(5px);
}

.sidebar .nav-item.active .nav-link{
    background:linear-gradient(135deg,#d4af37,#fbbf24);
    color:#111827 !important;
    box-shadow:0 10px 25px rgba(251,191,36,.25);
}

.sidebar .nav-item.active .nav-link i{
    color:#111827 !important;
}

.logout-menu .nav-link{
    background:rgba(239,68,68,.12);
}

.logout-menu .nav-link:hover{
    background:#ef4444;
    color:#fff !important;
}

.logout-menu .nav-link:hover i{
    color:#fff !important;
}

</style>

<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="<?= site_url('dashboard_admin');?>">

        <div class="sidebar-brand-icon">
            <i class="fas fa-hospital-symbol"></i>
        </div>

        <div class="sidebar-brand-text mx-2">
            RS AN-NISA
        </div>

    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= ($this->uri->segment(1)=='dashboard_admin') ? 'active' : ''; ?>">

        <a class="nav-link"
           href="<?= site_url('dashboard_admin');?>">

            <i class="fas fa-chart-pie"></i>
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
            <span>Pendaftaran Online</span>

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

    <li class="nav-item logout-menu">

        <a class="nav-link"
           href="<?= site_url('logout');?>">

            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>

        </a>

    </li>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">