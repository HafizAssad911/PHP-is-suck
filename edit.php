<?php
require 'koneksi.php';

$id = $_GET['id'];

$query_tampil = $koneksi->query("SELECT * FROM kelas WHERE id_kelas = '$id'");
$data = $query_tampil->fetch_assoc();

if (isset($_POST['submit'])) {

$nis = $_POST['nama'];
$nama = $_POST['wali_kelas'];
$jurusan = $_POST['jumlah_siswa'];

$query = $koneksi->query("UPDATE kelas SET nama='$nis', wali_kelas='$nama', jumlah_siswa='$jurusan' WHERE id_kelas='$id'");

if ($query) {
    header("Location: index.php");
} else {
    echo "Gagal mengupdate data.";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <h2>Edit Data kelas</h2>
    <form action="" method="POST">
        <label>Nama</label><br>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
        <br><br>

        <label>wali kelas:</label><br>
        <input type="text" name="wali_kelas"  value="<?= $data['wali_kelas']; ?>" required>
        <br><br>

        <label>Jumlah siswa:</label><br>
        <input type="text" name="jumlah_siswa"  value="<?= $data['jumlah_siswa']; ?>" required>
        <br><br>

        <button type="submit" name="submit">Update</button>
        <a href="index.php">Batal</a>

    </form>
    
</body>
</html>