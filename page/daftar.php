<?php
    
    require 'function.php';

    if (isset($_POST["register"])){

        if (registrasi($_POST) > 0){
            echo "<script>
                    alert('user baru telah ditambahkan!');
                </script>";
        } else {
            echo mysqli_error($conn);
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Desa Wanakerta</title>
    <link rel="stylesheet" href="/SIDEWA-WEB/styles/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
</head>

<body class="background-formsignup">
    <div class="container-signup">
        <div class="background-signup"></div>
        <a href="/SIDEWA-WEB/index.php" class="no-underline"><i class="ri-arrow-left-line"></i></a>
        <form class="signup-form" action="" method="post">
            <i><img src="../assets/logo2.svg" alt=""></i>
            <h4 style="text-align: center;">Pendaftaran Sistem Informasi Desa Wanakerta</h4>
            <br>
            <label for="nik-ktp">NIK KTP:</label>
            <input type="text" id="nik-ktp" name="nik-ktp" placeholder="Masukan NIK KTP Anda" required>
            <br>
            <label for="namalengkap">Nama Lengkap:</label>
            <input type="text" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap Anda" required>
            <br>
            <label for="jeniskelamin">Jenis Kelamin:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="laki-laki">
                <label class="form-check-label" for="laki-laki">Laki-laki</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan">
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
            <br>
            <label for="tempatlahir">Tempat Lahir:</label>
            <input type="text" id="tempatlahir" name="tempatlahir" placeholder="Masukan Tempat Lahir Anda" required>
            <br>
            <label for="tanggallahir">Tanggal Lahir:</label>
            <input type="date" id="tanggallahir" name="tanggallahir" placeholder="Masukan Tanggal Lahir Anda" required>
            <br>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap Anda" required></textarea>
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Masukan Username Anda" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="password2">Konfirmasi Password:</label>
            <input type="password" id="password2" name="password2" required>
            <br>
            <!-- <input type="submit" value="Daftar"> -->
            <button type="submit" name="daftar">Daftar</button>
        </form>
    </div>
</body>

</html>