<?php
session_start();

if (!isset($_SESSION['status_admin'])) {
    header("location:../login_admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header">
    <h1>Dashboard Admin</h1>
    <p>Kelola data wisata & review</p>
</div>

<div class="menu">
    <a href="dashboard.php">Dashboard</a>
    <a href="tambah_wisata.php">Tambah Wisata</a>
    <a href="data_review.php">Data Review</a>
    <a href="../index.php">Lihat Website</a>
    <a href="../logout_admin.php">Logout</a>
</div>

<div class="container">

    <div class="card">
        <h3>Kelola Wisata</h3>
        <p>Admin dapat menambah, mengedit, dan menghapus data wisata.</p>
        <a class="btn" href="tambah_wisata.php">Tambah Wisata</a>
    </div>

    <div class="card">
        <h3>Data Review</h3>
        <p>Lihat, edit, dan hapus review dari pengunjung.</p>
        <a class="btn" href="data_review.php">Lihat Review</a>
    </div>

    <div class="card">
        <h3>Lihat Website</h3>
        <p>Kembali ke tampilan user (frontend website).</p>
        <a class="btn" href="../index.php">Buka Website</a>
    </div>

</div>

</body>
</html>