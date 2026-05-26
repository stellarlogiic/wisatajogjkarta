<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id_user'])) {
    header("location:login_user.php?pesan=belum_login");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Review</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Tambah Review Wisata</h1>
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
    <form method="POST" action="proses_review.php">

        <label>Nama User</label>
        <input type="text" value="<?php echo $_SESSION['username']; ?>" readonly>

        <label>Pilih Wisata</label>
        <select name="id_wisata" required>
            <option value="">-- Pilih Wisata --</option>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM wisata");
            while ($data = mysqli_fetch_array($query)) {
                echo "<option value='".$data['id_wisata']."'>".$data['nama_wisata']."</option>";
            }
            ?>
        </select>

        <label>Komentar</label>
        <textarea name="komentar" rows="5" required></textarea>

        <label>Rating</label>
        <select name="rating" required>
            <option value="">-- Pilih Rating --</option>
            <option value="1">1 - Kurang</option>
            <option value="2">2 - Cukup</option>
            <option value="3">3 - Lumayan</option>
            <option value="4">4 - Bagus</option>
            <option value="5">5 - Sangat Bagus</option>
        </select>

        <button type="submit">Simpan Review</button>
    </form>
</div>

</body>
</html>