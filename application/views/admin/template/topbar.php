<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-lg">

    <!-- TOGGLE MOBILE -->
    <button
    id="sidebarToggleTop"
    class="btn btn-link d-md-none rounded-circle mr-3">

        <i class="fa fa-bars text-success"></i>

    </button>

    <!-- TITLE -->
    <div class="d-flex align-items-center">

        <div class="mr-3">

            <i class="fas fa-hospital-alt fa-2x text-success"></i>

        </div>

        <div>

            <h4 class="mb-0 font-weight-bold text-success">

                Admin Rumah Sakit

            </h4>

            <small class="text-muted">

                Sistem Manajemen Pelayanan Pasien

            </small>

        </div>

    </div>

    <!-- RIGHT MENU -->
    <ul class="navbar-nav ml-auto align-items-center">

        <!-- DATE -->
        <li class="nav-item mr-4 d-none d-lg-block">

            <span class="text-muted small">

                <i class="fas fa-calendar-alt text-primary"></i>

                <?= date('d F Y'); ?>

            </span>

        </li>

        <!-- NOTIFICATION -->
        <li class="nav-item dropdown no-arrow mx-2">

            <a class="nav-link">

                <i class="fas fa-bell fa-lg text-warning"></i>

                <span class="badge badge-danger badge-counter">

                    3+

                </span>

            </a>

        </li>

        <!-- USER -->
        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle"
               href="#"
               role="button"
               data-toggle="dropdown">

                <div class="text-right mr-3">

                    <span class="d-block text-gray-800 font-weight-bold">

                        <?= $this->session->userdata('nama_admin');?>

                    </span>

                    <small class="text-success">

                        Administrator

                    </small>

                </div>

                <img class="img-profile rounded-circle shadow"
                src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png"
                width="48">

            </a>

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">

                <a class="dropdown-item" href="#">

                    <i class="fas fa-user mr-2 text-primary"></i>

                    Profil

                </a>

                <a class="dropdown-item" href="#">

                    <i class="fas fa-cog mr-2 text-secondary"></i>

                    Pengaturan

                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item text-danger"
                href="<?= site_url('logout');?>">

                    <i class="fas fa-sign-out-alt mr-2"></i>

                    Logout

                </a>

            </div>

        </li>

    </ul>

</nav>

<style>

.topbar{

border-radius:18px;

}

.dashboard-title{

font-size:24px;

font-weight:800;

}

.img-profile{

border:3px solid #56f156;

padding:2px;

}

.badge-counter{

font-size:10px;

position:absolute;

transform:translate(-8px,-10px);

}

</style>