<?php
include 'config.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM hewan WHERE id=$id");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Hewan</title>
</head>
<body>

<h2>Edit Data Hewan</h2>

<form method="post" action="update_hewan.php">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">

    Nama Hewan:<br>
    <input type="text" name="nama_hewan" value="<?= $d['nama_hewan'] ?>" required><br><br>

    Jenis:<br>
    <input type="text" name="jenis" value="<?= $d['jenis'] ?>" required><br><br>

    Asal Hewan:<br>
    <input type="text" name="asal_hewan" value="<?= $d['asal_hewan'] ?>" required><br><br>

    Jumlah:<br>
    <input type="number" name="jumlah" value="<?= $d['jumlah'] ?>" required><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>