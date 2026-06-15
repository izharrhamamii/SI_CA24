<div class="container-fluid">

<div class="d-sm-flex
align-items-center
justify-content-between
mb-4">

<h2 class="font-weight-bold text-success">

<i class="fas fa-file-medical-alt mr-2"></i>

Status Pendaftaran Saya

</h2>

</div>

<div class="card border-0 shadow-lg">

<div class="card-header
bg-gradient-success
text-white py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-user mr-2"></i>

Riwayat Pendaftaran RS AN-NISA

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-success text-center">

<tr>

<th>No</th>
<th>Dokter</th>
<th>Keluhan</th>
<th>Tanggal</th>
<th>Jam</th>
<th>Status</th>

</tr>

</thead>

<tbody>

<?php if(!empty($status)): ?>

<?php $no=1; foreach($status as $s): ?>

<tr>

<td class="text-center">

<span class="badge badge-success p-2">

<?= $no++; ?>

</span>

</td>

<td>

<i class="fas fa-user-md
text-success mr-2"></i>

<?= $s->nama_dokter; ?>

</td>

<td>

<?= $s->keluhan; ?>

</td>

<td>

<i class="fas fa-calendar-alt
text-primary mr-1"></i>

<?= $s->tanggal_kunjungan; ?>

</td>

<td>

<i class="fas fa-clock
text-warning mr-1"></i>

<?= $s->jam_kunjungan; ?>

</td>

<td class="text-center">

<?php if($s->status=='Disetujui'){ ?>

<span class="badge badge-success px-3 py-2">

<i class="fas fa-check-circle"></i>

Disetujui

</span>

<?php } elseif($s->status=='Ditolak'){ ?>

<span class="badge badge-danger px-3 py-2">

<i class="fas fa-times-circle"></i>

Ditolak

</span>

<?php } else { ?>

<span class="badge badge-warning px-3 py-2">

<i class="fas fa-hourglass-half"></i>

Menunggu

</span>

<?php } ?>

</td>

</tr>

<?php endforeach; ?>

<?php else: ?>

<tr>

<td colspan="6" class="text-center py-5">

<i class="fas fa-folder-open
fa-3x text-secondary mb-3"></i>

<h5 class="text-muted">

Belum ada data pendaftaran

</h5>

<p class="text-muted">

Silahkan lakukan pendaftaran berobat terlebih dahulu.

</p>

<a
href="<?= site_url('pendaftaran');?>"

class="btn btn-success">

<i class="fas fa-plus-circle"></i>

Daftar Sekarang

</a>

</td>

</tr>

<?php endif; ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

<style>

.bg-gradient-success{

background:linear-gradient(
135deg,
#198754,
#20c997
);

}

.card{

border-radius:22px;

overflow:hidden;

}

.table{

border-radius:15px;

overflow:hidden;

}

.table tbody tr{

transition:.25s;

}

.table tbody tr:hover{

background:#f3fff8;

transform:scale(1.01);

}

.badge{

border-radius:10px;

font-size:13px;

}

</style>