<?php
include 'connection.php';

$id = $_POST['id'];
$nomor_pasien = $_POST['nomor'];

mysqli_query($koneksi, "UPDATE puskesmas SET nomor = '$nomor_pasien' WHERE nomor = '$id'");
