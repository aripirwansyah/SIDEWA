<?php 
    session_start();
    require 'function.php';

    // cek cookie
    if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if( $key === hash('sha256', $row['username']) ) {
            $_SESSION['login'] = true;
        }


    }

    if( isset($_SESSION["login"]) ) {
        header("Location: ../index.php");
        exit;
    }


    if( isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // cek username
        if( mysqli_num_rows($result) === 1 ) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                // set session
                $_SESSION["login"] = true;

                // cek remember me
                if( isset($_POST['remember']) ) {
                    // buat cookie
                    setcookie('id', $row['id'], time()+60);
                    setcookie('key', hash('sha256', $row['username']), time()+60);
                }

                header("Location: ../index.php");
                exit;
            }
        }

        $error = true;

    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Desa Wanakerta</title>
        <link rel="stylesheet" href="../styles/styles.css">

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="shortcut icon" href="../assets/icon.svg" type="image/x-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />

        <style>
            label {
                display: block;
            }
            li {
                list-style: none;
            }
        </style>
    </head>


    <body class="body-formlogin">

        <?php if( isset($error) ) : ?>
            <!-- <p style="color: red; font-style: italic;">username / password salah</p> -->
            echo "<script>
                alert('username / password salah');
            </script>";
        <?php endif; ?>


        <div class="background"></div>
        <div class="container-form">
            <a href="../index.php" class="no-underline"><i class="ri-arrow-left-line"></i></a>
            <form class="login-form" action="" method="post">
                <i><img src="../assets/logo2.svg" alt=""></i>
                <h4>Sistem Informasi Desa Wanakerta</h4>
                <br>
                    <li>
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" placeholder="Masukan Username Anda">
                    </li>
                    <li>
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" placeholder="Masukan Password Anda">
                    </li>
                    <li>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                    </li>
                    <li>
                        <button type="submit" name="login">Login</button>
                    </li>
            </form>
        </div>
        
        <!-- <div class="container-signup">
        <div class="background-signup"></div>
        <a href="/SIDEWA-WEB/index.php" class="no-underline"><i class="ri-arrow-left-line"></i></a>
        <form class="signup-form" action="" method="post">
            <i><img src="../assets/logo2.svg" alt=""></i>
            <h4 style="text-align: center;">Sistem Informasi Desa Wanakerta</h4>
            <br>
                    <li>
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username" placeholder="Masukan Username Anda">
                    </li>
                    <li>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" placeholder="Masukan Passsword Anda">
                    </li>
                    <li>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me </label>
                    </li>
                    <li>
                        <button type="submit" name="login">Login</button>
                    </li>
        </form>
        </div> -->

</body>
</html>