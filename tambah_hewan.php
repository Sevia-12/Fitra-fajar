<!DOCTYPE html>
<html>
<head>
    <title>Tambah Hewan</title>
</head>
<body>

<h2>Tambah Data Hewan</h2>

<form method="post" action="tambah_hewan_aksi.php">
    Nama Hewan:<br>
    <input type="text" name="nama_hewan" required><br><br>

    Jenis:<br>
    <input type="text" name="jenis" required><br><br>

    Asal Hewan:<br>
    <input type="text" name="asal_hewan" required><br><br>

    Jumlah:<br>
    <input type="number" name="jumlah" required><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>