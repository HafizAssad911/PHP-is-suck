<?php
require "koneksi.php";
if (isset($_POST['submit'])) {

echo $nis = $_POST['nama'];
echo $nama = $_POST['wali_kelas'];
echo $jurusan = $_POST['jumlah_siswa'];

$query = $koneksi->query("INSERT INTO kelas (nama, wali_kelas, jumlah_siswa)
VALUES ('$nis', '$nama', '$jurusan')");

if ($query) {
    header("Location: index.php");
} else {
echo "Gagal menambah data.";
}
}
?>
<!DOCTYPE html>
<html >
<head>
    
    <title>data kelas</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Wali kelas:</label><br>
        <input type="text" name="wali_kelas" required><br><br>

        <label>Jumlah siswa:</label><br>
        <input type="text" name="jumlah_siswa" required><br><br>

        <button type="submit" name="submit">Simpan</button>
        <a href="index1.php">Batal</a>
    </form>
    
</body>
</html>