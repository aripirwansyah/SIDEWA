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
    <link rel="stylesheet" href="../styles/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="shortcut icon" href="../assets/icon.svg" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <style>
        label {
            display: block;
        }
        li {
            list-style: none;
        }
    </style>
</head>

<body class="background-formsignup">
    <div class="container-signup">
        <div class="background-signup"></div>
        <a href="/SIDEWA-WEB/index.php" class="no-underline"><i class="ri-arrow-left-line"></i></a>
        <form class="signup-form" action="" method="post">
            <i><img src="../assets/logo2.svg" alt=""></i>
            <h4 style="text-align: center;">Formulir Pendaftaran SIDEWA</h4>
            <br>
                    <li>
                        <label for="nik-ktp">NIK KTP: </label>
                        <input type="text" name="nik-ktp" id="nik-ktp" placeholder="Masukan NIK Anda">
                    </li>
                    <li>
                        <label for="namalengkap">Nama Lengkap: </label>
                        <input type="text" name="namalengkap" id="namalengkap" placeholder="Masukan Nama Lengkap Anda">
                    </li>
                    <li>
                            <label for="jeniskelamin">Jenis Kelamin:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="laki-laki" value="Laki-laki">
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                    </li>
                    <li>
                        <label for="tempatlahir">Tempat Lahir: </label>
                        <input type="text" name="tempatlahir" id="tempatlahir" placeholder="Masukan Tempat Lahir Anda">
                    </li>
                    <li>
                        <label for="tanggallahir">Tanggal Lahir: </label>
                        <input type="date" name="tanggallahir" id="tanggallahir" placeholder="Masukan Tanggal Lahir Anda">
                    </li>
                    <li>
                        <label for="alamat">Alamat: </label>
                        <textarea name="alamat" rows="10" cols="30" placeholder="Masukan Alamat Lengkap Anda"></textarea>
                    </li>
                    <li>
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <label for="password2">Konfirmasi Password: </label>
                        <input type="password" name="password2" id="password2">
                    </li>
                    <li>
                        <button type="submit" name="register">Daftar</button>
                    </li>
        </form>
    </div>
</body>

</html>