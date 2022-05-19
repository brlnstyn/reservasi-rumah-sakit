<!DOCTYPE html>
<html>

<head>
    <title>Struk</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div id="container">
        <div class="main">
            <form method="POST" action="struk2.php">
                <div class="content_struk">
                    <center>
                        <h4>Royal Medical Center<br>Jl.HR Edi Sukma Cigombong, Bogor<br>Telp.08234652903</h4>
                        <hr width="27%" color="black">
                        <div class="struk">
                            <?php
                            if (isset($_POST['submit'])) {
                                $biaya = $_POST['biaya'];
                                $jumlah_obat = $_POST['obat'];
                                $jumlah_hari = $_POST['hari'];
                                $rekomendasi = $_POST['pengobatan'];
                                $tunai = $_POST['tunai'];
                                $total = $biaya * ($jumlah_obat + $jumlah_hari);
                                $kembalian = $tunai - $total;

                                echo "Biaya: Rp " . $biaya;
                                echo "<br>Jumlah Obat: " . $jumlah_obat;
                                echo "<br>Jumlah Hari: " . $jumlah_hari;
                                echo "<br>Rekomendasi Pengobatan: " . $rekomendasi;
                                echo "<br>Tunai: Rp " . $tunai;
                                echo "<br>Total: Rp " . $total;
                                echo "<br>Kembalian: Rp " . $kembalian;
                            }
                            ?>
                        </div>
                        <hr width="27%" color="black">
                        <h4>SELALU JAGA KESEHATAN</h4>
                    </center>
                </div>
            </form>
        </div>
</body>

</html>

<script>
    window.print();
</script>