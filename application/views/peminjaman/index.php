<div class="container-fluid">
    <h1 class="h3 mb-4">Data Peminjaman</h1>

    <a href="<?= site_url('peminjaman/tambah'); ?>" class="btn btn-primary mb-3">
        Tambah
    </a>

    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered" id="dataTable">
        
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $no=1; foreach($data as $d): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $d->kode_peminjaman; ?></td>
                <td><?= $d->nama; ?></td>
                <td><?= $d->tanggal_pinjam; ?></td>
                <td><?= $d->status; ?></td>
                <td>
                <?php
            $today = date('Y-m-d');

            $selisih = strtotime($today) - strtotime($d->tanggal_jatuh_tempo);

            $terlambat = $selisih > 0
                ? floor($selisih / 86400)
                : 0;
            ?>
                    <?php if($d->status == 'dipinjam'): ?>
                        <a href="<?= site_url('peminjaman/kembali/'.$d->id); ?>"
                           class="btn btn-success btn-sm">
                           Kembalikan
                        </a>

                        <a href="<?= site_url('whatsapp/kirim_notifikasi/' .$d->id); ?>"
                        class="btn btn-warning btn-sm">

                        <li class="fab fa-whatsapp"></i>
                        Kirim WA

                    </a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "language": {
            "search": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ data",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "paginate": {
                "previous": "Sebelumnya",
                "next": "Berikutnya"
            }
        }
    });
});
</script>