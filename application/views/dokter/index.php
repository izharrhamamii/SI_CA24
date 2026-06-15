<div class="container-fluid">

<div class="d-sm-flex
align-items-center
justify-content-between
mb-4">

<h2 class="font-weight-bold text-primary">

<i class="fas fa-user-md mr-2"></i>

Data Dokter

</h2>

<a
href="<?= site_url('dokter/tambah');?>"
class="btn btn-primary shadow">

<i class="fas fa-plus-circle"></i>

Tambah Dokter

</a>

</div>

<div class="card border-0 shadow-lg">

<div class="card-header
bg-gradient-primary
text-white
py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-alt mr-2"></i>

Daftar Dokter RS AN-NISA

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead class="table-primary text-center">

<tr>

<th width="70">No</th>

<th>Nama Dokter</th>

<th>Spesialis</th>

<th>Jadwal Praktek</th>

<th width="180">Aksi</th>

</tr>

</thead>

<tbody>

<?php
$no=1;
foreach($dokter as $d):
?>

<tr>

<td class="text-center">

<span class="badge badge-primary p-2">

<?= $no++; ?>

</span>

</td>

<td>

<i class="fas fa-user-md text-primary mr-2"></i>

<?= $d->nama_dokter; ?>

</td>

<td>

<span class="badge badge-info p-2">

<?= $d->spesialis; ?>

</span>

</td>

<td>

<i class="fas fa-calendar-check text-success mr-2"></i>

<?= $d->jadwal_praktek; ?>

</td>

<td class="text-center">

<a
href="<?= site_url('dokter/hapus/'.$d->id_dokter);?>"

class="btn btn-danger btn-sm shadow"

onclick="return confirm('Yakin hapus dokter ini?')">

<i class="fas fa-trash-alt"></i>

Hapus

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
#66f485,
#92f95a
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

.table thead{

font-size:14px;

letter-spacing:.5px;

}

.table tbody tr{

transition:.25s;

}

.table tbody tr:hover{

background:#f4f9ff;

transform:scale(1.01);

}

.btn{

border-radius:10px;

font-weight:600;

}

.badge{

font-size:13px;

border-radius:8px;

}

</style>