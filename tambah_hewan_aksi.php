<?php
include 'config.php';

$nama = $_POST['nama_hewan'];
$jenis = $_POST['jenis'];
$asal = $_POST['asal_hewan'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "INSERT INTO hewan VALUES (NULL, '$nama', '$jenis', '$asal', '$jumlah')");

header('Location: index.php');
?>