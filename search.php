<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_reservasi_rs");

function query($query){
	global $koneksi;
	$data = mysqli_query($koneksi, $query);
	$rows = [];
	while($d = mysqli_fetch_assoc($data)){
		$rows[] = $d;
	}
	return $rows;
}

	function cari($keywoard){
		$query = "SELECT * FROM puskesmas
					 WHERE 
				nama LIKE '%$keywoard%' OR
				nomor = '$keywoard' OR
				kamar = '$keywoard'
				";
	return query($query);
	}
