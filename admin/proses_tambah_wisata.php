<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['status_admin'])) {
    header("location:../login_admin.php?pesan=belum_login");
    exit;
}

$nama_wisata = $_POST['nama_wisata'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$harga_tiket = $_POST['harga_tiket'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];

$query = mysqli_query($koneksi, "INSERT INTO wisata 
(nama_wisata, kategori, lokasi, harga_tiket, deskripsi, gambar)
VALUES
('$nama_wisata', '$kategori', '$lokasi', '$harga_tiket', '$deskripsi', '$gambar')");

if ($query) {
    header("location:dashboard.php");
} else {
    echo "Data gagal disimpan";
}
?>