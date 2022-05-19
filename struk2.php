<?php
include 'connection.php';

$id = $_POST['id'];
$nama_pasien = $_POST['nama'];
mysqli_query($koneksi, "UPDATE puskesmas SET nama = '$nama_pasien' WHERE nomor = '$id'");
