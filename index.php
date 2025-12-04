<?php
include 'config.php';

$data = mysqli_query($koneksi, "SELECT * FROM hewan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Hewan</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        a.btn { padding: 6px 12px; background: green; color: #fff; text-decoration: none; border-radius: 4px; }
        a.hapus { background: red; }
    </style>
</head>
<body>

<h2 style="text-align:center;">📋 Data Hewan</h2>

<div style="text-align:center;">
    <a href="tambah_hewan.php" class="btn">+ Tambah Hewan</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Nama Hewan</th>
        <th>Jenis</th>
        <th>Asal Hewan</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>

    <?php while ($d = mysqli_fetch_array($data)) { ?>
    <tr>
        <td><?= $d['id'] ?></td>
        <td><?= $d['nama_hewan'] ?></td>
        <td><?= $d['jenis'] ?></td>
        <td><?= $d['asal_hewan'] ?></td>
        <td><?= $d['jumlah'] ?></td>
        <td>
            <a href="edit_hewan.php?id=<?= $d['id'] ?>" class="btn">Edit</a>
            <a href="hapus_hewan.php?id=<?= $d['id'] ?>" class="btn hapus" onclick="return confirm('Hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>