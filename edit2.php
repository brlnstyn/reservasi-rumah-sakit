<?php
include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$tb = $_POST['tb'];
$bb = $_POST['bb'];
$keluhan = $_POST['keluhan'];
$kamar = $_POST['kamar'];
$status = $_POST['status'];

mysqli_query($koneksi, "UPDATE puskesmas SET nama = '$nama', jk = '$jk', umur = '$umur', alamat = '$alamat', tb = '$tb', bb = '$bb', keluhan = '$keluhan', kamar = '$kamar', status = '$status' WHERE nomor = '$id'");

header("location:beranda.php");
