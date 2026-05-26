<div class="container-fluid">
    <h3>Laporan Daftar Buku</h3>

    <form method="get">
        <select name="kategori" class="form-control mb-2" style="width:250px;">

            <option value="">-- Semua Kategori --</option>

            <?php foreach($kategori as $k): ?>
                <option value="<?= $k->id; ?>"
                <?= ($this->input->get('kategori') == $k->id) ? 'selected' : ''; ?>>

                    <?= $k->nama_kategori; ?>

                </option>
            <?php endforeach; ?>

        </select>

        <button type="submit" class="btn btn-primary btn-sm">
            Filter
        </button>

        <a href="<?= site_url('laporan_buku/buku'); ?>" 
class="btn btn-secondary btn-sm">
    Reset
</a>

<a href="<?= site_url('laporan_buku/cetak_buku?kategori='.$this->input->get('kategori')); ?>"
target="_blank"
class="btn btn-success btn-sm">
    Cetak PDF
</a>

    <br><br>

    <div class="table-responsive">
        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                </tr>
            </thead>

            <tbody>

            <?php $no=1; foreach($data as $d): ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d->kode_buku; ?></td>
                    <td><?= $d->judul; ?></td>
                    <td><?= $d->nama_kategori; ?></td>
                    <td><?= $d->stok; ?></td>
                </tr>

            <?php endforeach; ?>

            </tbody>

        </table>
    </div>
</div>