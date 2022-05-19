<?php
include 'connection.php';

$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$tb = $_POST['tb'];
$bb = $_POST['bb'];
$keluhan = $_POST['keluhan'];
$kamar = $_POST['kamar'];
$status = $_POST['status'];

mysqli_query($koneksi, "INSERT INTO puskesmas (tanggal, nama, jk, umur, alamat, tb, bb, keluhan, kamar, status) VALUES('$tanggal', '$nama', '$jk', '$umur', '$alamat', '$tb', '$bb', '$keluhan', '$kamar', '$status')");

header("location:beranda.php");
