<div class="container-fluid">
    <h1>Edit Buku</h1>

    <form method="post" action="<?= base_url('buku/update'); ?>">

        <!-- ID -->
        <input type="hidden" name="id" value="<?= $buku->id ?>">

        <!-- KODE BUKU -->
        <input type="text" name="kode_buku" 
        value="<?= $buku->kode_buku ?>" 
        class="form-control mb-2" placeholder="Kode Buku">

        <!-- JUDUL -->
        <input type="text" name="judul" 
        value="<?= $buku->judul ?>" 
        class="form-control mb-2">

        <!-- PENULIS -->
        <input type="text" name="penulis" 
        value="<?= $buku->penulis ?>" 
        class="form-control mb-2">

        <!-- PENERBIT -->
        <input type="text" name="penerbit" 
        value="<?= $buku->penerbit ?>" 
        class="form-control mb-2">

        <!-- TAHUN -->
        <input type="number" name="tahun" 
        value="<?= $buku->tahun ?>" 
        class="form-control mb-2">

        <!-- KATEGORI -->
        <select name="id_kategori" class="form-control mb-2">
            <?php foreach($kategori as $k): ?>
                <option value="<?= $k->id ?>" 
                <?= $buku->id_kategori == $k->id ? 'selected' : '' ?>>
                    <?= $k->nama_kategori ?>
                </option>
            <?php endforeach; ?>
        </select>

        <!-- STOK -->
        <input type="number" name="stok" 
        value="<?= $buku->stok ?>" 
        class="form-control mb-2">

        <!-- LOKASI -->
        <input type="text" name="lokasi_rak" 
        value="<?= $buku->lokasi_rak ?>" 
        class="form-control mb-2">

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>