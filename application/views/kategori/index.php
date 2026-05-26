<div class="container-fluid">
    <h1 class="h3 mb-4">Data Kategori</h1>

    <a href="<?= site_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>

    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($kategori as $k): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $k->nama_kategori; ?></td>
            <td>
                <a href="<?= site_url('kategori/edit/'.$k->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= site_url('kategori/hapus/'.$k->id); ?>" 
                   onclick="return confirm('Yakin?')" 
                   class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>