<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda Wisata Jogja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header home-header">
    <h1>Sistem Informasi Wisata Jogja</h1>
    <p>Temukan destinasi wisata, baca review, dan bagikan pengalamanmu</p>
</div>

<div class="menu">
    <a href="index.php">Beranda</a>
    <a href="wisata.php">Wisata</a>
    <a href="review.php">Review</a>
    <a href="tambah_review.php">Tambah Review</a>

    <?php if (isset($_SESSION['username'])) { ?>
        <span>👤 <?php echo $_SESSION['username']; ?></span>
        <a href="logout_user.php">Logout</a>
    <?php } else { ?>
        <a href="login_user.php">Login User</a>
    <?php } ?>

    <a href="login_admin.php">Login Admin</a>
</div>

<div class="home-container">

    <div class="hero-card">
        <div>
            <h2>Jelajahi Wisata Terbaik di Yogyakarta</h2>
            <p>
                Website ini membantu pengunjung melihat informasi tempat wisata,
                membaca review, dan memberikan penilaian berdasarkan pengalaman.
            </p>
            <a href="wisata.php" class="btn">Lihat Wisata</a>
            <a href="tambah_review.php" class="btn btn-outline">Tambah Review</a>
        </div>
    </div>

    <div class="fitur-box">
        <div class="fitur">
            <h3>🏝️ Daftar Wisata</h3>
            <p>Menampilkan informasi wisata seperti lokasi, kategori, tiket, dan deskripsi.</p>
        </div>

        <div class="fitur">
            <h3>⭐ Review User</h3>
            <p>Pengunjung dapat membaca komentar dan rating dari user lain.</p>
        </div>

    </div>

</div>

</body>
</html>