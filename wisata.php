<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Daftar Tempat Wisata Jogja</h1>
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

<div class="container">

<?php
$query = mysqli_query($koneksi, "SELECT * FROM wisata");

while ($data = mysqli_fetch_array($query)) {
?>

<div class="card">
    <h3><?php echo $data['nama_wisata']; ?></h3>

    <img src="<?php echo $data['gambar']; ?>">

    <p><b>Kategori:</b> <?php echo $data['kategori']; ?></p>
    <p><b>Lokasi:</b> <?php echo $data['lokasi']; ?></p>
    <p><b>Harga Tiket:</b> Rp <?php echo $data['harga_tiket']; ?></p>
    <p><?php echo $data['deskripsi']; ?></p>

    <a class="btn" href="review.php?id_wisata=<?php echo $data['id_wisata']; ?>">
        Lihat Review
    </a>
</div>

<?php } ?>

</div>

</body>
</html>