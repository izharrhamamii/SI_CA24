<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pendaftaran Pasien</title>

    <style>
        body {
            font-family: Arial;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        .btn {
            margin: 10px;
        }

        @media print {
            .btn {
                display: none;
            }
        }
    </style>
</head>

<body>

<h3>Laporan Pendaftaran Pasien</h3>

<table>
    <tr>
        <th>No</th>
        <th>Nama Pasien</th>
        <th>Dokter</th>
        <th>Keluhan</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Status</th>
    </tr>

    <?php $no=1; foreach($pendaftaran as $p): ?>

    <tr>
        <td><?= $no++; ?></td>
        <td><?= $p->nama_pasien; ?></td>
        <td><?= $p->nama_dokter; ?></td>
        <td><?= $p->keluhan; ?></td>
        <td><?= $p->tanggal_kunjungan; ?></td>
        <td><?= $p->jam_kunjungan; ?></td>
        <td><?= $p->status; ?></td>
    </tr>

    <?php endforeach; ?>

</table>

<script>
window.onload = function() {
    window.print();
}
</script>

</body>