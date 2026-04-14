<div class="container-fluid">
    <h1>Edit Anggota</h1>

    <form action="<?= base_url('anggota/update'); ?>" method="post">

        <input type="hidden" name="nomor" value="<?= $anggota->nomor_anggota ?>">

        <input type="text" name="nama" value="<?= $anggota->nama ?>" class="form-control mb-2">
        <input type="text" name="alamat" value="<?= $anggota->alamat ?>" class="form-control mb-2">
        <input type="text" name="telepon" value="<?= $anggota->telepon ?>" class="form-control mb-2">
        <input type="text" name="email" value="<?= $anggota->email ?>" class="form-control mb-2">
        <input type="date" name="tanggal" value="<?= $anggota->tanggal_daftar ?>" class="form-control mb-2">

        <select name="status" class="form-control mb-2">
            <option <?= $anggota->status == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
            <option <?= $anggota->status == 'Nonaktif' ? 'selected' : '' ?>>Nonaktif</option>
        </select>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>