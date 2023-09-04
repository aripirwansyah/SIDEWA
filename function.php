<?php
    //koneksi db
    $conn = mysqli_connect("localhost", "root", "", "sidewa");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    function registrasi($data) {
        global $conn;

        // $nik = strtolower(stripcslashes($data["nik"]));
        // $namalengkap = strtolower(stripcslashes($data["namalengkap"]));
        // $jeniskelamin = strtolower(stripcslashes($data["jeniskelamin"]));
        // $tempatlahir = strtolower(stripcslashes($data["tempatlahir"]));
        // $tanggallahir = strtolower(stripcslashes($data["tanggallahir"]));
        // $alamat = strtolower(stripcslashes($data["alamat"]));
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek usernama sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM usertest WHERE username = '$username'");

        // cek konfirmasi password
        if( $password !== $password2 ) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai!');
                </script>";
            return false;
        }

        if(mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('username sudah terdaftar')
                </script>";
            return false;
        }

        // enkripsi userbaru ke database
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO usertest VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }
?>  