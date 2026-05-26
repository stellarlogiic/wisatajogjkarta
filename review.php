<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Review Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Review Pengunjung</h1>
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
if (isset($_GET['id_wisata'])) {
    $id_wisata = $_GET['id_wisata'];

    $ambil_wisata = mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata='$id_wisata'");
    $data_wisata = mysqli_fetch_array($ambil_wisata);

    echo "<h2>Review untuk: " . $data_wisata['nama_wisata'] . "</h2>";

    $query = mysqli_query($koneksi, "
        SELECT review.*, user.username, wisata.nama_wisata
        FROM review
        JOIN user ON review.id_user = user.id_user
        JOIN wisata ON review.id_wisata = wisata.id_wisata
        WHERE review.id_wisata = '$id_wisata'
    ");
} else {
    echo "<h2>Semua Review Wisata</h2>";

    $query = mysqli_query($koneksi, "
        SELECT review.*, user.username, wisata.nama_wisata
        FROM review
        JOIN user ON review.id_user = user.id_user
        JOIN wisata ON review.id_wisata = wisata.id_wisata
    ");
}

if (mysqli_num_rows($query) == 0) {
    echo "<div class='card'>";
    echo "<h3>Belum ada review</h3>";
    echo "<p>Wisata ini belum memiliki review.</p>";
    echo "</div>";
}

while ($data = mysqli_fetch_array($query)) {
    $rating = $data['rating'];

    if ($rating == 5) {
        $teks = "🔥 GOKIL BANGET";
    } elseif ($rating == 4) {
        $teks = "😍 KEREN PARAH";
    } elseif ($rating == 3) {
        $teks = "😎 LUMAYAN LAH";
    } elseif ($rating == 2) {
        $teks = "😐 BIASA AJA";
    } else {
        $teks = "😴 GAK REKOMEND";
    }
?>

<div class="card">
    <h3><?php echo $data['nama_wisata']; ?></h3>

    <p><b>Nama User:</b> <?php echo $data['username']; ?></p>

    <p>
        <b>Rating:</b>
        <?php
        for ($i = 1; $i <= $rating; $i++) {
            echo "⭐";
        }
        ?>
        - <?php echo $teks; ?>
    </p>

    <p><?php echo $data['komentar']; ?></p>

    <?php if (isset($_SESSION['id_user']) && $_SESSION['id_user'] == $data['id_user']) { ?>
        <a class="btn" href="edit_review_user.php?id=<?php echo $data['id_review']; ?>">
            Edit Review
        </a>
    <?php } ?>
</div>

<?php } ?>

</div>

</body>
</html>