<?php

require 'koneksi.php';

$query = $koneksi->query("SELECT * FROM kelas ORDER BY id_kelas DESC");

?>

<!DOCTYPE html>
<html>
<head>
    
    
    <title>Data Siswa</title>
    
</head>
<body>

    <h1>Data Siswa</h1>
    <a href="tambah.php">Tambah Siswa</a>
    <table border="1" cellpadding="10" cellspacing="0">


            <tr>
            <th>no</th>
            <th>nama</th>
            <th>wali kelas</th>
            <th>jumlah siswa</th>
            <th>aksi</th>    
        </tr>
        <?php 
        $no = 1;
        while ($row = $query->fetch_assoc()) {
            ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']?></td>
            <td><?= $row['wali_kelas']?></td>
            <td><?= $row['jumlah_siswa']?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_kelas']; ?>">Edit</a>
                <a href="delete.php?id_kelas=<?= $row['id_kelas']; ?>" onclick="return confirm('Yakin hapus');">Hapus</a>
            </td>
            
        </tr>
        <?php 
        } 
        ?>
        


    </table>
</body>

</html>