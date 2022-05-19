<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Transaksi</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    </script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="header">
        <i class="fas fa-clinic-medical fa-3x" style="color: white; padding-top: 10px; padding-left: 15px;"></i>
        <span>Royal Medical Center</span>
        <span>
            <i><a href="beranda.php" class="link">Kembali</a></i>
        </span>
    </div>

    <?php
    include 'connection.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM puskesmas WHERE nomor = '$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <table rules="none" border="1px" width="30%">
            <div class="perhitungan" style="float: right; margin-right: 170px; margin-top: 90px;">
                <h5>Biaya</h5>
                <input type="text" name="" id="bil1">
                <h5>Obat</h5>
                <input type="text" name="" id="bill2">
                <h5>Hari</h5>
                <input type="text" name="" id="bill3">
                <h5>Total</h5>
                <input type="text" name="" id="hasil">
            </div>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript">
                $(".perhitungan").keyup(function() {
                    var bil1 = parseInt($("#bil1").val())
                    var bill2 = parseInt($("#bill2").val())
                    var bill3 = parseInt($("#bill3").val())

                    var hasil = bil1 * (bill2 + bill3);
                    $("#hasil").attr("value", hasil)
                });
            </script>

        </table>
        <div class="main" style="padding-bottom: 70px;">
            <form method="POST" action="transaksi2.php">
                <table rules="none" border="1px" width="60%" style="margin-left: 20px;">
                    <br><br>
                    <tr>
                        <th class="teks">Nomor Pasien</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="number" name="nomor" value="<?php echo $d['nomor']; ?>" size="30" style="margin-top: 20px;" class="input">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Nama Pasien</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="text" name="id" value="<?php echo $d['nama']; ?>" size="30" class="input">
                        </td>
                    </tr>
            </form>
            <form method="POST">
                <tr>
                    <th class="teks">Status</th>
                    <th class="teks">:</th>
                    <td colspan="1">
                        <input type="submit" name="berobat" value="Berobat" class="button_status">
                        <input type="submit" name="rawat" value="Rawat Inap" class="button_status">
                    </td>
                </tr>
            </form>
            <div class="perhitungan">
                <form method="POST" action="struk.php">
                    <tr>
                        <th class="teks">Biaya</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="text" name="biaya" size="30" class="input" style="margin-top: 10px;" value="
					<?php
                    if (isset($_POST['berobat'])) {
                        echo "25000";
                    } elseif (isset($_POST['rawat'])) {
                        echo "100000";
                    }
                    ?>">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Jumlah Obat</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="text" name="obat" class="input" autocomplete="off" placeholder="Jumlah Obat">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Jumlah Hari</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="text" name="hari" class="input" autocomplete="off" placeholder="Jumlah Hari">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Rekomendasi Pengobatan</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="radio" name="pengobatan" value="Rawat Jalan">Rawat Jalan
                            <input type="radio" name="pengobatan" value="Selesai">Selesai
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Tunai</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="number" name="tunai" style="margin-top: 10px;" autocomplete="off" class="input" placeholder="Tunai">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Hitung" style="margin-bottom: 20px; margin-left: 300px;" class="submit">
                        </td>
                    </tr>
                    <br>
                    </table>

                </form>
            </div>
        </div>
    <?php } ?>
    <div class="footer">
        <span>HARGAI KESEHATANMU SEDINI MUNGKIN</span>
    </div>
</body>

</html>