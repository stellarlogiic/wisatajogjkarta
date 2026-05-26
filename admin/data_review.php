<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['status_admin'])) {
    header("location:../login_admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Review</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header">
    <h1>Data Review Pengunjung</h1>
</div>

<div class="menu">
    <a href="dashboard.php">Dashboard</a>
    <a href="tambah_wisata.php">Tambah Wisata</a>
    <a href="data_review.php">Data Review</a>
    <a href="../logout_admin.php">Logout</a>
</div>

<div class="container">

<?php
$query = mysqli_query($koneksi, "
    SELECT review.*, user.username, wisata.nama_wisata
    FROM review
    JOIN user ON review.id_user = user.id_user
    JOIN wisata ON review.id_wisata = wisata.id_wisata
");

while ($data = mysqli_fetch_array($query)) {
?>

<div class="card">
    <h3><?php echo $data['nama_wisata']; ?></h3>
    <p><b>User:</b> <?php echo $data['username']; ?></p>
    <p><b>Rating:</b> <?php echo $data['rating']; ?></p>
    <p><?php echo $data['komentar']; ?></p>

    <a class="btn" href="edit_review.php?id=<?php echo $data['id_review']; ?>">Edit</a>
    <a class="btn btn-red" href="hapus_review.php?id=<?php echo $data['id_review']; ?>" onclick="return confirm('Yakin mau hapus review ini?')">Hapus</a>
</div>

<?php } ?>

</div>

</body>
</html>