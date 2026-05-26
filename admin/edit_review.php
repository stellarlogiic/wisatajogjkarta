<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['status_admin'])) {
    header("location:../login_admin.php");
    exit;
}

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "
    SELECT review.*, user.username, wisata.nama_wisata
    FROM review
    JOIN user ON review.id_user = user.id_user
    JOIN wisata ON review.id_wisata = wisata.id_wisata
    WHERE id_review='$id'
"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Review</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="header">
    <h1>Edit Review</h1>
</div>

<div class="menu">
    <a href="dashboard.php">Dashboard</a>
    <a href="data_review.php">Kembali</a>
</div>

<div class="container">
    <form method="POST" action="proses_edit_review.php">
        
        <input type="hidden" name="id" value="<?php echo $data['id_review']; ?>">

        <label>Wisata</label>
        <input type="text" value="<?php echo $data['nama_wisata']; ?>" readonly>

        <label>User</label>
        <input type="text" value="<?php echo $data['username']; ?>" readonly>

        <label>Komentar</label>
        <textarea name="komentar" required><?php echo $data['komentar']; ?></textarea>

        <label>Rating</label>
        <input type="number" name="rating" min="1" max="5" value="<?php echo $data['rating']; ?>" required>

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>