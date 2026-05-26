<div class="container-fluid">
    <h1>Tambah Kategori</h1>

    <form method="post" action="<?= site_url('kategori/simpan'); ?>">
        <input type="text" name="nama_kategori" class="form-control mb-2" placeholder="Nama Kategori" required>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>