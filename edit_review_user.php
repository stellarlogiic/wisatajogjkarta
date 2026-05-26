<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['id_user'])) {
    header("location:login_user.php");
    exit;
}

$id = $_GET['id'];

$data = mysqli_fetch_array(mysqli_query($koneksi, "
    SELECT * FROM review WHERE id_review='$id'
"));

// cek apakah review milik user ini
if ($data['id_user'] != $_SESSION['id_user']) {
    echo "Tidak punya akses!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Review</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    <h1>Edit Review</h1>
</div>

<div class="container">
    <form method="POST" action="proses_edit_review_user.php">
        <input type="hidden" name="id_review" value="<?php echo $data['id_review']; ?>">

        <label>Komentar</label>
        <textarea name="komentar" required><?php echo $data['komentar']; ?></textarea>

        <label>Rating</label>
        <select name="rating">
            <option value="1" <?php if ($data['rating']==1) echo "selected"; ?>>1</option>
            <option value="2" <?php if ($data['rating']==2) echo "selected"; ?>>2</option>
            <option value="3" <?php if ($data['rating']==3) echo "selected"; ?>>3</option>
            <option value="4" <?php if ($data['rating']==4) echo "selected"; ?>>4</option>
            <option value="5" <?php if ($data['rating']==5) echo "selected"; ?>>5</option>
        </select>

        <button type="submit">Update Review</button>
    </form>
</div>

</body>
</html>