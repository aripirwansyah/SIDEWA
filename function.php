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
        
        $nik = $data["nik-ktp"];
        $namalengkap = $data["namalengkap"];
        $jeniskelamin = $data["jeniskelamin"];
        $tempatlahir = $data["tempatlahir"];
        $tanggallahir = $data["tanggallahir"];
        @$alamat = $data["alamat"];
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek usernama sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

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
        mysqli_query($conn, "INSERT INTO user VALUES('', '$nik', '$namalengkap', '$jeniskelamin', '$tempatlahir', '$tanggallahir', 
        '$alamat', '$username', '$password', $password2)");

        return mysqli_affected_rows($conn);
    }
?>  