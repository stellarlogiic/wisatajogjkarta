<?php
include '../koneksi.php';

$id = $_POST['id'];

mysqli_query($koneksi, "UPDATE wisata SET
nama_wisata='$_POST[nama_wisata]',
kategori='$_POST[kategori]',
lokasi='$_POST[lokasi]',
harga_tiket='$_POST[harga_tiket]',
deskripsi='$_POST[deskripsi]',
gambar='$_POST[gambar]'
WHERE id_wisata='$id'");

header("location:dashboard.php");
?>