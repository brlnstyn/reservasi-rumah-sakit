<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Pasien</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php
    include 'connection.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM puskesmas WHERE nomor = '$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <div class="header">
            <i class="fas fa-clinic-medical fa-3x" style="color: white; padding-top: 10px; padding-left: 15px;"></i>
            <span>Royal Medical Center</span>
            <span>
                <i><a href="beranda.php" class="link">Kembali</a></i>
            </span>
        </div>
        <br><br>
        <div class="main" style="padding-bottom: 66px;">
            <form method="POST" action="edit2.php">
                <center>
                    <table rules="none" border="1px" width="60%">
                        <br>
                        <tr>
                            <th class="teks">Nama</th>
                            <th class="teks">:</th>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['nomor']; ?>">
                                <input type="text" name="nama" value="<?php echo $d['nama']; ?>" style="margin-top: 20px;" class="input" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Jenis Kelamin</th>
                            <th class="teks">:</th>
                            <td>
                                <label>
                                    <input type="radio" name="jk" value="L" <?php if ($d['jk'] == 'L')
                                                                                echo 'checked' ?>>L
                                </label>
                                <label>
                                    <input type="radio" name="jk" style="margin-bottom: 10px;" value="P" <?php if ($d['jk'] == 'P')
                                                                                                                echo 'checked' ?>>P
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Umur</th>
                            <th class="teks">:</th>
                            <td>
                                <input type="number" name="umur" value="<?php echo $d['umur']; ?>" size="30" class="input">
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Alamat</th>
                            <th class="teks">:</th>
                            <td>
                                <textarea name="alamat" class="input"><?php echo $d['alamat']; ?>
					</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Tinggi Badan</th>
                            <th class="teks">:</th>
                            <td>
                                <input type="number" name="tb" value="<?php echo $d['tb']; ?>" size="30" class="input">
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Berat Badan</th>
                            <th class="teks">:</th>
                            <td>
                                <input type="number" name="bb" value="<?php echo $d['bb']; ?>" size="30" class="input">
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Keluhan</th>
                            <th class="teks">:</th>
                            <td>
                                <textarea name="keluhan" class="input"><?php echo $d['keluhan']; ?>
					</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Kamar</th>
                            <th class="teks">:</th>
                            <td>
                                <select name="kamar" required="" class="input">
                                    <?php
                                    if ($d['kamar'] == "Melati") echo "<option value = 'Melati' selected>Melati</option>";
                                    else echo "<option value = 'Melati'>Melati</option>";

                                    if ($d['kamar'] == "Mawar") echo "<option value = 'Mawar' selected>Mawar</option>";
                                    else echo "<option value = 'Mawar'>Mawar</option>";

                                    if ($d['kamar'] == "Jasmin") echo "<option value = 'Jasmin' selected>Jasmin</option>";
                                    else echo "<option value = 'Jasmin'>Jasmin</option>";

                                    if ($d['kamar'] == "Anggrek") echo "<option value = 'Anggrek' selected>Anggrek</option>";
                                    else echo "<option value = 'Anggrek'>Anggrek</option>";

                                    if ($d['kamar'] == "Raflesia") echo "<option value = 'Raflesia' selected>Raflesia</option>";
                                    else echo "<option value = 'Raflesia'>Raflesia</option>";

                                    if ($d['kamar'] == "---") echo "<option value = '---' selected>---</option>";
                                    else echo "<option value = '---'>---</option>";

                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="teks">Status</th>
                            <th class="teks">:</th>
                            <td>
                                <label>
                                    <input type="radio" name="status" value="Berobat" <?php if ($d['status'] == 'Berobat')
                                                                                            echo 'checked' ?>>Berobat
                                </label>
                                <label>
                                    <input type="radio" name="status" style="margin-bottom: 10px;" value="Rawat Inap" <?php if ($d['status'] == 'Rawat Inap')
                                                                                                                            echo 'checked' ?>>Rawat Inap
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" value="Edit" style="margin-bottom: 20px; margin-left: 300px;" class="submit">
                            </td>
                        </tr>
                    </table>
                </center>
            </form>
        </div>
    <?php } ?>
    <div class="footer">
        <span>HARGAI KESEHATANMU SEDINI MUNGKIN</span>
    </div>
</body>

</html>