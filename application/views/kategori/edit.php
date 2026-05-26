<div class="container-fluid">
    <h1>Edit Kategori</h1>

    <form method="post" action="<?= site_url('kategori/update'); ?>">

        <input type="hidden" name="id" value="<?= $kategori->id; ?>">

        <input type="text" name="nama_kategori" 
        value="<?= $kategori->nama_kategori; ?>" 
        class="form-control mb-2" required>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= site_url('kategori'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>