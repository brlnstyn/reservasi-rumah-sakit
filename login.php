<?php
session_start();
include 'connection.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    </script>
</head>

<body style="background: url('picture.png');">
    <center>
        <h2 class="judul">SELAMAT DATANG DI <br> ROYAL MEDICAL CENTER</h2>
        <br>
        <form method="POST">
            <div class="box">
                <div class="login">
                    <table>
                        <i class="far fa-user-circle fa-4x" style="margin-top:20px; color:#CEB8A4">
                        </i>

                        <tr>
                            <td>
                                <input type="text" name="username" size="35" placeholder="Username" class="form" autocomplete="off" required="" style="margin-top: 30px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="Password" name="password" size="35" placeholder="Password" class="form" required="" style="margin-top: 30px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="login" value="Login" class="loginsub">
                            </td>
                        </tr>
                    </table>

                </div>
        </form>
        <div class="pesan_login">
            <?php
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = mysqli_query($koneksi, "SELECT * FROM login_user WHERE username = '$username' AND password = '$password'");
                $cek = mysqli_num_rows($result);
                if ($cek == 1) {
                    $_SESSION['userweb'] = $username;
                    header("location:beranda.php");
                    exit;
                } else {
                    echo "Maaf username dan password anda salah";
                }
            }
            ?>
        </div>
        </div>
    </center>
</body>

</html>