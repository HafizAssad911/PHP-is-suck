<?php
$a = "localhost";
$b = "root";
$c = "";
$d = "otonk_database";

$koneksi = new mysqli($a, $b, $c, $d);

if ($koneksi->connect_error) {
    die("koneksi ke database gagal: ". $koneksi->connect_error);
}
?>