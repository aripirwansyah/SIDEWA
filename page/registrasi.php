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
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Pendaftaran Sistem Informasi Desa Wanakerta</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nik-ktp">NIK KTP: </label>
                <input type="text" name="nik-ktp" id="nik-ktp" placeholder="Masukan NIK Anda">
            </li>
            <li>
                <label for="namalengkap">Nama Lengkap: </label>
                <input type="text" name="namalengkap" id="namalengkap" placeholder="Masukan Nama Lengkap Anda">
            </li>
            <li>
                <label for="jeniskelamin">Jenis Kelamin: </label>
                    <select id="jeniskelamin" name="jeniskelamin">
                        <option value="pilihjeniskelamin" aria-placeholder=""></option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
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
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>