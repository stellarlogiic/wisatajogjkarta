<?php
session_start();
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM wisata WHERE id_wisata='$id'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Wisata</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container">
    <form method="POST" action="proses_edit_wisata.php">
        <input type="hidden" name="id" value="<?php echo $data['id_wisata']; ?>">

        <label>Nama Wisata</label>
        <input type="text" name="nama_wisata" value="<?php echo $data['nama_wisata']; ?>">

        <label>Kategori</label>
        <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>">

        <label>Lokasi</label>
        <input type="text" name="lokasi" value="<?php echo $data['lokasi']; ?>">

        <label>Harga</label>
        <input type="number" name="harga_tiket" value="<?php echo $data['harga_tiket']; ?>">

        <label>Deskripsi</label>
        <textarea name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>

        <label>Gambar</label>
        <input type="text" name="gambar" value="<?php echo $data['gambar']; ?>">

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>