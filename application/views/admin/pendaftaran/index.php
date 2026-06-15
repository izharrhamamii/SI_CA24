<div class="container-fluid">

<div class="d-sm-flex
align-items-center
justify-content-between
mb-4">

<h2 class="font-weight-bold text-primary">

<i class="fas fa-calendar-check mr-2"></i>

Data Pendaftaran Pasien

</h2>

</div>

<div class="card border-0 shadow-lg">

<div class="card-header
bg-gradient-primary
text-white py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-user mr-2"></i>

Daftar Pendaftaran RS AN-NISA

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-primary text-center">

<tr>

<th>No</th>
<th>Nama Pasien</th>
<th>Dokter</th>
<th>Keluhan</th>
<th>Tanggal</th>
<th>Jam</th>
<th>Status</th>
<th width="220">Aksi</th>

</tr>

</thead>

<tbody>

<?php $no=1; foreach($pendaftaran as $p): ?>

<tr>

<td class="text-center">

<span class="badge badge-primary p-2">

<?= $no++; ?>

</span>

</td>

<td>

<i class="fas fa-user text-primary mr-2"></i>

<?= $p->nama_pasien; ?>

</td>

<td>

<i class="fas fa-user-md text-success mr-2"></i>

<?= $p->nama_dokter; ?>

</td>

<td>

<?= $p->keluhan; ?>

</td>

<td>

<i class="fas fa-calendar text-info mr-1"></i>

<?= $p->tanggal_kunjungan; ?>

</td>

<td>

<i class="fas fa-clock text-warning mr-1"></i>

<?= $p->jam_kunjungan; ?>

</td>

<td class="text-center">

<?php if($p->status=='Menunggu'){ ?>

<span class="badge badge-warning px-3 py-2">

<i class="fas fa-hourglass-half"></i>

Menunggu

</span>

<?php }elseif($p->status=='Disetujui'){ ?>

<span class="badge badge-success px-3 py-2">

<i class="fas fa-check-circle"></i>

Disetujui

</span>

<?php }else{ ?>

<span class="badge badge-danger px-3 py-2">

<i class="fas fa-times-circle"></i>

Ditolak

</span>

<?php } ?>

</td>

<td class="text-center">

<a
href="<?= site_url('pendaftaran_admin/setuju/'.$p->id_pendaftaran);?>"

class="btn btn-success btn-sm shadow-sm"

onclick="return confirm('Setujui pendaftaran pasien?')">

<i class="fas fa-check"></i>

Approve

</a>

<a
href="<?= site_url('pendaftaran_admin/tolak/'.$p->id_pendaftaran);?>"

class="btn btn-danger btn-sm shadow-sm"

onclick="return confirm('Tolak pendaftaran pasien?')">

<i class="fas fa-times"></i>

Tolak

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

<style>

.bg-gradient-primary{

background:linear-gradient(
135deg,
#89ec64,
#57f16b
);

}

.card{

border-radius:20px;

overflow:hidden;

}

.table{

border-radius:12px;

overflow:hidden;

}

.table tbody tr{

transition:.25s;

}

.table tbody tr:hover{

background:#f5faff;

transform:scale(1.01);

}

.btn{

border-radius:10px;

font-weight:600;

}

.badge{

font-size:13px;

border-radius:10px;

}

</style>