<?php
include "connection.php";
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM puskesmas WHERE nomor = '$id'");
header("location:beranda.php");
