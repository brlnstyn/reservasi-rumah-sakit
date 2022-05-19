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
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <form method="POST" action="">
        <center>
            <h1>ROYAL MEDICAL CENTER</h1>
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
                    </tr>
                <?php endforeach; ?>
            </table>
        </center>
    </form>
    <script>
        window.print();
    </script>
</body>

</html>