<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pasien</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
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
    <center>
        <div class="main" style="padding-bottom: 45px;">
            <form method="POST" action="tambah2.php">
                <table rules="none" border="1px" width="60%">
                    <br><br>
                    <tr>
                        <th class="teks">Tanggal</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="date" name="tanggal" required="" style="height: 25px; margin-bottom: 10px; margin-top: 20px;" size="30" class="input">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Nama</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="text" name="nama" autocomplete="off" required="" class="input" placeholder="Nama">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Jenis Kelamin</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="radio" name="jk" value="P" required="">P
                            <input type="radio" name="jk" value="L" required="">L
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Umur</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="number" name="umur" required="" size="30" class="input" placeholder="Umur">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Alamat</th>
                        <th class="teks">:</th>
                        <td><textarea name="alamat" required="" class="input" placeholder="Alamat"></textarea></td>
                    </tr>
                    <tr>
                        <th class="teks">Tinggi Badan</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="number" name="tb" required="" size="30" class="input" placeholder="Tinggi Badan">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Berat Badan</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="number" name="bb" required="" size="30" class="input" placeholder="Berat Badan">
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Keluhan</th>
                        <th class="teks">:</th>
                        <td><textarea name="keluhan" required="" class="input" placeholder="Keluhan"></textarea></td>
                    </tr>
                    <tr>
                        <th class="teks">Kamar</th>
                        <th class="teks">:</th>
                        <td>
                            <select name="kamar" required="" class="input">
                                <option value="Melati">Melati</option>
                                <option value="Mawar">Mawar</option>
                                <option value="Jasmin">Jasmin</option>
                                <option value="Anggrek">Anggrek</option>
                                <option value="Raflesia">Raflesia</option>
                                <option value="---">---</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="teks">Status</th>
                        <th class="teks">:</th>
                        <td>
                            <input type="radio" name="status" value="Berobat" required="">Berobat
                            <input type="radio" name="status" value="Rawat Inap" required="">Rawat Inap
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Tambah" style="margin-bottom: 20px;margin-left: 300px;" class="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
    <div class="footer">
        <span>HARGAI KESEHATANMU SEDINI MUNGKIN</span>
    </div>
</body>

</html>