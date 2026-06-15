<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">

<h2 class="font-weight-bold text-primary">

<i class="fas fa-user-injured mr-2"></i>

Data Pasien Rumah Sakit

</h2>

<a href="<?= site_url('pasien/tambah');?>"
class="btn btn-primary shadow">

<i class="fas fa-plus-circle"></i>

Tambah Pasien

</a>

</div>

<div class="card border-0 shadow-lg">

<div class="card-header bg-gradient-primary text-white py-3">

<h5 class="m-0 font-weight-bold">

<i class="fas fa-hospital-user mr-2"></i>

Daftar Pasien Terdaftar

</h5>

</div>

<div class="card-body">

<div class="table-responsive">

<table
class="table table-hover table-striped align-middle">

<thead class="bg-primary text-white text-center">

<tr>

<th>No</th>
<th>Nama Pasien</th>
<th>Username</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Tanggal Lahir</th>
<th width="220">Aksi</th>

</tr>

</thead>

<tbody>

<?php if(!empty($pasien)): ?>

<?php $no=1; foreach($pasien as $p): ?>

<tr>

<td class="text-center">

<span class="badge badge-primary p-2">

<?= $no++; ?>

</span>

</td>

<td>

<strong class="text-dark">

<i class="fas fa-user text-primary"></i>

<?= $p->nama; ?>

</strong>

</td>

<td>

<span class="badge badge-info">

<?= $p->username; ?>

</span>

</td>

<td>

<?= $p->alamat; ?>

</td>

<td>

<i class="fas fa-phone text-success"></i>

<?= $p->telepon; ?>

</td>

<td>

<i class="fas fa-calendar-alt text-danger"></i>

<?= date(
'd M Y',
strtotime($p->tanggal_lahir)
); ?>

</td>

<td class="text-center">

<a href="<?= site_url('pasien/edit/'.$p->id_pasien); ?>"

class="btn btn-warning btn-sm shadow-sm">

<i class="fas fa-edit"></i>

Edit

</a>

<a href="<?= site_url('pasien/hapus/'.$p->id_pasien); ?>"

class="btn btn-danger btn-sm shadow-sm"

onclick="return confirm('Yakin hapus pasien ini?')">

<i class="fas fa-trash"></i>

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>

<?php else: ?>

<tr>

<td colspan="7" class="text-center py-5">

<i class="fas fa-folder-open fa-3x text-secondary mb-3"></i>

<h5 class="text-muted">

Belum Ada Data Pasien

</h5>

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

.bg-gradient-primary{

background:linear-gradient(
135deg,
#000000,
#ffea00
);

}

.table-hover tbody tr:hover{

background:#eef6ff;

transform:scale(1.003);

transition:.25s;

}

.card{

border-radius:18px;

overflow:hidden;

}

.btn{

border-radius:10px;

font-weight:600;

}

.badge{

font-size:14px;

}

</style>