<?php
require 'koneksi.php';

if (isset($_GET['id_kelas'])){
    $id =$_GET['id_kelas'];

    $query = $koneksi->query("DELETE  FROM kelas WHERE id_kelas ='$id'");

    if ($query) {
        header ("Location: index.php");
    } else {
        echo "Gagal menghapus data.";
    }
}
?>