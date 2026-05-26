<?php
session_start();

if (!isset($_SESSION['status_admin'])) {
    header("location:../login_admin.php?pesan=belum_login");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Wisata</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header">
    <h1>Tambah Data Wisata</h1>
</div>

<div class="menu">
    <a href="dashboard.php">Dashboard</a>
    <a href="tambah_wisata.php">Tambah Wisata</a>
    <a href="data_review.php">Data Review</a>
    <a href="../index.php">Lihat Website</a>
    <a href="../logout_admin.php">Logout Admin</a>
</div>

<div class="container">
    <form method="POST" action="proses_tambah_wisata.php">
        <label>Nama Wisata</label>
        <input type="text" name="nama_wisata" required>

        <label>Kategori</label>
        <input type="text" name="kategori" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" required>

        <label>Harga Tiket</label>
        <input type="number" name="harga_tiket" required>

        <label>Deskripsi</label>
        <textarea name="deskripsi" rows="5" required></textarea>

        <label>Link Gambar</label>
        <input type="text" name="gambar" required>

        <button type="submit">Simpan</button>
    </form>
</div>

</body>
</html>