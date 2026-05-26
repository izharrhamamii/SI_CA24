<div class="container-fluid">
    <h1>Tambah Buku</h1>

    <form method="post" action="<?= base_url('buku/simpan'); ?>">

        <input type="text" name="kode" class="form-control mb-2" placeholder="Kode">
        <input type="text" name="judul" class="form-control mb-2" placeholder="Judul">
        <input type="text" name="penulis" class="form-control mb-2" placeholder="Penulis">
        <input type="text" name="penerbit" class="form-control mb-2" placeholder="Penerbit">
        <input type="number" name="tahun" class="form-control mb-2" placeholder="Tahun">

        <select name="id_kategori" class="form-control mb-2">
            <?php foreach($kategori as $k): ?>
                <option value="<?= $k->id ?>"><?= $k->nama_kategori ?></option>
            <?php endforeach; ?>
        </select>

        <input type="number" name="stok" class="form-control mb-2" placeholder="Stok">
        <input type="text" name="lokasi_rak" class="form-control mb-2" placeholder="Lokasi Rak">

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>