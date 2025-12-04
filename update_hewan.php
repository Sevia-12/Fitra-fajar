<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama_hewan'];
$jenis = $_POST['jenis'];
$asal = $_POST['asal_hewan'];
$jumlah = $_POST['jumlah'];

mysqli_query($koneksi, "UPDATE hewan SET 
    nama_hewan='$nama',
    jenis='$jenis',
    asal_hewan='$asal',
    jumlah='$jumlah'
    WHERE id=$id
");

header('Location: index.php');
?>