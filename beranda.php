<?php
include 'connection.php';
error_reporting(0);
require 'search.php';
$puskesmas = query("SELECT * FROM puskesmas");

if (isset($_POST['submit'])) {
    $puskesmas = cari($_POST['keywoard']);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kasir</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <i class="fas fa-clinic-medical fa-3x" style="color: white; padding-top: 10px; padding-left: 15px;"></i>
            <span>Royal Medical Center</span>
            <span><i>
                    <a href="tambah.php" class="tambah">Tambah Pasien</a>
                    <a href="print.php" class="print">Print</a>
                    <a href="login.php" class="logout">Logout</a>
            </span></i>
        </div>
        <br><br>
        <div class="main">
            <form method="POST" action="">
                <center>
                    <input type="search" name="keywoard" class="search" size="80" placeholder="Cari Pasien..." autocomplete="off">
                    <input type="submit" class="button" name="submit" value="Cari">
                    <br><br>
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM puskesmas");
                    $jumlah_pasien = mysqli_num_rows($data);
                    ?>
                    <h3 style="text-align: center;">
                        <p>Jumlah Pasien: <?php echo $jumlah_pasien; ?></p>
                    </h3>
                    <table border="1px" cellpadding="10" cellspacing="0" class="table">
                        <tr>
                            <th style="width: 30px;">No</th>
                            <th style="width: 100px;">Tanggal</th>
                            <th style="width: 40px;">Nomor Pasien</th>
                            <th style="width: 100px;">Nama</th>
                            <th style="width: 30px;">JK</th>
                            <th style="width: 40px;">Umur</th>
                            <th style="width: 80px;">Alamat</th>
                            <th style="width: 50px;">TB(cm)</th>
                            <th style="width: 50px;">BB(kg)</th>
                            <th style="width: 90px;">Keluhan</th>
                            <th style="width: 50px;">Kamar</th>
                            <th style="width: 60px;">Status</th>
                            <th style="width: 190px;">Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM puskesmas");
                        foreach ($puskesmas as $d) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['nomor']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['jk']; ?></td>
                                <td><?php echo $d['umur']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['tb']; ?></td>
                                <td><?php echo $d['bb']; ?></td>
                                <td><?php echo $d['keluhan']; ?></td>
                                <td><?php echo $d['kamar']; ?></td>
                                <td><?php echo $d['status']; ?></td>
                                <td>
                                    <a class="link1" href="edit.php?id=<?php echo $d['nomor']; ?>">Edit</a>
                                    <a class="link2" href="transaksi.php?id=<?php echo $d['nomor']; ?>">Transaksi</a>
                                    <a class="link3" href="hapus.php?id=<?php echo $d['nomor']; ?>">Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </center>
            </form>
        </div>
        <div class="footer">
            <span>HARGAI KESEHATANMU SEDINI MUNGKIN</span>
        </div>
    </div>
</body>

</html>