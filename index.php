<?php

    session_start();

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Desa Wanakerta</title>
    <link rel="stylesheet" href="/SIDEWA-WEB/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="shortcut icon" href="../SIDEWA-WEB/assets/icon.svg" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a href="/index.php" class="logo"><img src="assets/logo2.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                        <a class="nav-link mx-1" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1" href="#visi_misi">Visi dan Misi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#profil_desa" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil Desa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#kelembagaan">Kelembagaan</a></li>
                            <li><a class="dropdown-item" href="#lokasi_desa">Lokasi Desa</a></li>
                            <li><a class="dropdown-item" href="#demografi_desa">Demografi Desa</a></li>
                            <li><a class="dropdown-item" href="#keadaan_sosial">Keadaan Sosial</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#layanan_masyarakat" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan Masyarakat
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../SIDEWA-WEB/page/pembuatan-sku.php">Pembuatan SKU</a></li>
                            <li><a class="dropdown-item" href="#">Pembuatan KTP</a></li>
                            <li><a class="dropdown-item" href="#">Pembuatan KK</a></li>
                            <li><a class="dropdown-item" href="#">Pengaduan Masyarakat</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <div class="d-grid gap-1 d-md-flex justify-content-md-end text-center">
                    <a href="../SIDEWA-WEB/page/login.php"><button class="btn btn-outline-primary me-md-2"
                            type="button">Masuk</button></a>
                    <a href="../SIDEWA-WEB/page/daftarakun.php" class="btn btn-primary" type="button">Daftar</button></a>
                </div> -->
                <?php if(!isset($_SESSION['login']) || $_SESSION['login'] == ""){?>
                    <a href="../SIDEWA-WEB/page/login.php"><button class="btn btn-outline-primary me-md-2"
                            type="button">Masuk</button></a>
                    <a href="../SIDEWA-WEB/page/daftarakun.php" class="btn btn-primary" type="button">Daftar</button></a>
                <?php }else{ ?>
                    <a href="../SIDEWA-WEB/page/logout.php" class="btn btn-danger">Keluar</i></a>
                <?php } ?>
            </div>
    </nav>
    <!-- Navbar -->

    <!-- Header -->
    <div class="header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="fw-semibold" data-aos="fade-up">Sistem Informasi Desa Wanakerta</h1>
                    <p class="text-white-50" data-aos="fade-up" data-aos-delay="300">Sistem Pelayanan Masyarakat Desa
                        Wanakerta</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->

    <!-- Visi dan Misi -->
    <div class="visi-misi" id="visi_misi">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h1 class="fw-bold" data-aos="fade-up">Visi dan Misi</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300">Berikut adalah Visi dan Misi Desa
                        Wanakerta</p>
                </div>
                <div class="row align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="assets/img/visimisi.jpg" alt="" srcset="">
                    </div>
                    <div class="col pb-5">
                        <h5 class="fw-bold"><u>Visi Desa Wanakerta</u></h5>
                        <br>
                        <p>
                            “Melayani Masyarakat Desa Wanakerta Secara Menyeluruh Demi Terwujudnya Desa Wanakerta Yang
                            Maju, Mandiri, Sehat Dan Sejahtera Berlandaskan Iman Dan Takwa”
                        </p>
                        <br>
                        <br>

                        <h5 class="fw-bold"><u>Misi Desa Wanakerta</u></h5>
                        <br />
                        <ol>
                            <li>Mengoptimalkan kinerja Perangkat Desa secara maksimal sesuai tugas pokok dan fungsi
                                Perangkat Desa demi tercapainya pelayanan yang baik bagi masyarakat.</li>
                            <li>Melaksanakan koordinasi antar mitra kerja.</li>
                            <li>Meningkatkan Sumber Daya Manusia dan memanfaatkan Sumber Daya Alam untuk mencapai
                                Kesejahteraan Masyarakat.</li>
                            <li>Meningkatkan Kapasitas kelembagaan yang ada di Desa Wanakerta.</li>
                            <li>Meningkatkan kualitas kesehatan Masyarakat.</li>
                            <li>Meningkatkan kesejahteraan masyarakat Desa Wanakerta dengan melibatkan secara langsung
                                masyarakat Desa Wanakerta dalam berbagai bentuk kegiatan.</li>
                            <li>Melaksanakan kegiatan pembangunan yang jujur, baik, dan transparan dan dapat
                                dipertanggungjawabkan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi dan Misi -->

    <!-- Kelembagaan -->
    <div class="kelembagaan" id="kelembagaan">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h1 class="fw-bold" data-aos="fade-up">Kelembagaan Desa</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300"></p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold">
                        <ul>
                            <li><u>Bagan Perangkat Desa Wanakerta</u></li>
                        </ul>
                    </h5>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="assets/img/BaganPerangkatDesaWanakerta.png" alt="" srcset="">
                        <figcaption><i>Bagan Perangkat Desa Wanakerta</i></figcaption>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold">
                        <ul>
                            <li><u>Bagan Badan Permusyawaratan Desa (BPD) Wanakerta</u></li>
                        </ul>
                    </h5>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="assets/img/BaganBPDWanakerta.png" alt="" srcset="">
                        <figcaption><i>Bagan BPD Wanakerta</i></figcaption>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold">
                        <ul>
                            <li><u>Bagan Lembaga Pemberdayaan Masyarakat Desa (LPMD) dan
                                    Bagan Pekerja Sosial Masyarakat Desa (PSMD) Wanakerta</u></li>
                        </ul>
                    </h5>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="assets/img/BaganLPMDdanPSMDWanakerta.png" alt="" srcset="">
                        <figcaption><i>Bagan LPMD dan PSMD Wanakerta</i></figcaption>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold">
                        <ul>
                            <li><u>Bagan Pemberdayaan Kesejahteraan Keluarga (PKK) Desa Wanakerta</u></li>
                        </ul>
                    </h5>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="col pb-4">
                        <img src="assets/img/BaganPKKDWanakerta.png" alt="" srcset="">
                        <figcaption><i>Bagan PKK Desa Wanakerta</i></figcaption>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kelembagaan -->

    <!-- Lokasi Desa -->
    <div class="lokasi-desa" id="lokasi_desa">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h1 class="fw-bold" data-aos="fade-up">Lokasi Desa</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300"></p>
                </div>
                <div class="row align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold"><u>Peta Desa Wanakerta</u></h5>
                    <div class="col pb-4">
                        <img src="assets/img/petawnk.png" alt="" srcset="">
                    </div>
                    <div class="col pb-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d525.1174130405382!2d107.22346297505939!3d-6.3735068332367355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699e99388f3973%3A0x2f837e4a7f0e9bee!2sKantor%20Desa%20Wanakerta!5e0!3m2!1sid!2sid!4v1690259960330!5m2!1sid!2sid"
                            class="rounded-2" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <p><a href="https://goo.gl/maps/i2NBkpQVKqNyPhrU7" target="_blank">https://goo.gl/maps/i2NBkpQVKqNyPhrU7</a></p> -->
                    </div>
                    <br>
                    <div class="container text-justify" data-aos="fade-up" data-aos-delay="400">
                        <p>
                            Desa Wanakerta merupakan bagian dari wilayah Kecamatan Telukjambe Barat sebelah Barat
                            Kecamatan berbatasan langsung dengan wilayah Kabupaten Bekasi. Dengan luas wilayah Desa
                            Wanakerta 547,835 Hektar. Dengan batas-batas wilayah sebagai berikut:
                        </p>
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 align-items-start">
                            <div class="col">
                                <h6>Batas</h6>
                                <p>Utara <br> Selatan <br> Timur <br> Barat</p>
                            </div>
                            <div class="col">
                                <h6>Desa</h6>
                                <p>Wanasari <br> Wanajaya <br> Margamulya <br> Pasirranji</p>
                            </div>
                            <div class="col">
                                <h6>Kecamatan</h6>
                                <p>Telukjambe Barat <br> Telukjambe Barat <br> Telukjambe Barat <br> Cikarang Pusat</p>
                            </div>
                            <div class="col">
                                <h6>Kabupaten</h6>
                                <p>Karawang <br> Karawang <br> Karawang <br> Bekasi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="col justify-content-between align-content-between">
                            <h5 class="fw-bold">Peta Desa Wanakerta</h5>
                            <p>
                                Desa Wanakerta merupakan bagian dari wilayah Kecamatan Telukjambe Barat sebelah Barat Kecamatan berbatasan langsung dengan wilayah Kabupaten Bekasi. Dengan luas wilayah Desa Wanakerta 547,835 Hektar. Dengan batas-batas wilayah sebagai berikut:
                            </p>
                            <br>
                            <div class="container text-justify">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <h6>Batas</h6>
                                        <p>Utara <br> Selatan <br> Timur <br> Barat</p>
                                    </div>
                                    <div class="col">
                                        <h6>Desa</h6>
                                        <p>Wanasari <br> Wanajaya <br> Margamulya <br> Pasirranji</p>
                                    </div>
                                    <div class="col">
                                        <h6>Kecamatan</h6>
                                        <p>Tj. Barat <br> Tj. Barat <br> Tj. Barat <br> CikPus</p>
                                    </div>
                                    <div class="col">
                                        <h6>Kabupaten</h6>
                                        <p>Karawang <br> Karawang <br> Karawang <br> Bekasi</p>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <h6>*Keterangan:</h6>
                                <li>Tj. Barat = Telukjambe Barat</li>
                                <li>CikPus = Cikarang Pusat</li>
                            </p>
                            <p><a href="https://goo.gl/maps/i2NBkpQVKqNyPhrU7" target="_blank">https://goo.gl/maps/i2NBkpQVKqNyPhrU7</a></p>
                        </div>
                        <div class="col pb-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d525.1174130405382!2d107.22346297505939!3d-6.3735068332367355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699e99388f3973%3A0x2f837e4a7f0e9bee!2sKantor%20Desa%20Wanakerta!5e0!3m2!1sid!2sid!4v1690259960330!5m2!1sid!2sid" class="rounded-2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <!-- Lokasi Desa -->

    <!-- Demografi Desa -->
    <div class="demografi-desa" id="demografi_desa">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h1 class="fw-bold" data-aos="fade-up">Demografi Desa</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300"></p>
                </div>
                <div class="row align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold"><u>1. Topografi</u></h5>
                    <p>
                        Desa Wanakerta merupakan desa yang berada di dataran tinggi, dengan ketinggian +150 Meter DPL
                        (Diatas Permukaan Laut),
                        sebagian besar wilayah desa adalah lahan pertanian/sawah/ladang dengan permukaan tanah 65% datar
                        dan 25% berbukit.
                    </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h5 class="fw-bold"><u>2. Hidrologi dan Krimatologi</u></h5>
                    <p>
                        Desa Wanakerta terletak pada ketinggiian 150 meter dari permukaan laut dengan kontur permukaan
                        tanah 65 % datar dan 25 % berbukit,
                        Desa Wanakerta terdapat Irigasi dan Sungai Cibeet, air digunakan saat kekurangan air ke sawah
                        dengan alat pompa air disaat kemarau.
                    </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h5 class="fw-bold"><u>3. Luas dan Sebaran Penggunaan Lahan</u></h5>
                    <p>
                        Pada umumnya lahan yang berada atau terdapat di Desa Wanakerta digunakan secara produktif,
                        karena merupakan lahan yang subur terutama untuk lahan pertanian,
                        jadi hanya sebagian kecil saja yang tidak dimanfaatkan oleh warga, hal ini pula menunjukan bahwa
                        kawasan Desa Wanakerta adalah daerah yang memiliki sumber daya alam yang memadai.
                    </p>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="col pb-4">
                            <img src="assets/img/luasdansebaranpenggunaanlahan.png" alt="" srcset="">
                            <figcaption><i>Luas wilayah Penggunaan Lahan</i></figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Demografi Desa -->

    <!-- Keadaan Sosial -->
    <div class="keadaan-sosial" id="keadaan_sosial">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h1 class="fw-bold" data-aos="fade-up">Keadaan Sosial</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300"></p>
                </div>
                <div class="row align-items-center" data-aos="fade-up" data-aos-delay="400">
                    <h5 class="fw-bold"><u>1. Kependudukan</u></h5>
                    <p>
                        Penduduk Desa Wanakerta berdasarkan data terakhir hasil sensus Penduduk Tahun 2022 tercatat
                        sebanyak 5.398 jiwa,
                        mengenai penduduk Desa Wanakerta mengalami kenaikan untuk setiap tahunnya dengan rata-rata 0,3
                        %.
                    </p>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="col pb-4">
                            <img src="assets/img/kependudukan.png" alt="" srcset="">
                            <figcaption><i>Data Kependudukan Per Tahun 2022</i></figcaption>
                            <br>
                            <img src="assets/img/jumlahpenduduk.png" alt="" srcset="">
                            <figcaption><i>Jumlah Penduduk Desa Wanakerta</i></figcaption>
                        </div>
                    </div>

                    <h5 class="fw-bold"><u>2. Pendidikan</u></h5>
                    <p>
                        Pendidikan merupakan salah satu modal dasar pembangunan, sehingga pendidikan adalah sebuah
                        investasi (modal) dimasa yang akan datang.
                    </p>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="col pb-4">
                            <img src="assets/img/datatempatpendidikan.png" alt="" srcset="">
                            <figcaption><i>Data Pendidikan/Sekolah Formal atau Non-Formal</i></figcaption>
                        </div>
                    </div>

                    <h5 class="fw-bold"><u>3. Kebudayaan</u></h5>
                    <p>
                        Kebudayaan yang ada di Desa Wanakerta merupakan modal dasar pembangunan yang melandasi
                        pembangunan yang akan dilaksanakan,
                        warisan budaya yang bernilai luhur merupakan dasar dalam rangka pengembangan pariwisata budaya.
                        <br>
                        <br>
                        Pemerintah terus membina kelompok dan organisasi kesenian yang ada, walupun dengan keterbatasan
                        dana yang dialokasikan,
                        namun semangat para pewaris kebudayaan di Desa Wanakerta Kecamatan Telukjambe Barat Kabupaten
                        Karawang,
                        terus merawat dan melestarikannya dengan akhir-akhir ini membentuk Ikatan Olahraga dan Seni
                        mulai dari tingkat Desa sampai Ketingkat Kabupaten Karawang.
                        Dengan memeliharanya agar kelompok-kelompok kesenian tersebut terus terpelihara.
                        <br>
                        <br>
                        Beberapa kelompok kesenian yang ada Di Desa Wanakerta yang masih eksis dan terawat adalah
                        sebagai berikut.
                    </p>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="col pb-4">
                            <img src="assets/img/budayadankesenian.png" alt="" srcset="">
                            <figcaption><i>Data Budaya dan Kesenian Desa Wanakerta</i></figcaption>
                        </div>
                    </div>

                    <h5 class="fw-bold"><u>4. Pemuda dan Olahraga</u></h5>
                    <p>
                        Dalam hal kepemudaan, pada tahun 2022 tidak terlepas dari aktifitas dan eksistensi karang
                        taruna, baik level desa maupun level RW,
                        sedangkan jumlah anggota karang taruna aktif untuk level desa meskipun telah dibentuk sampai
                        saat ini belum memperlihatkan eksistensinya,
                        jadi hampir seluruh usia karang taruna terlibat aktif di kepengurusan tingkat RW, baik pengurus
                        aktif maupun yang tidak aktif.
                        <br>
                        <br>
                        Sedangkan organisasi keolahragaan yang ada di desa Wanakerta, cukup variatif, maupun semua
                        organisasi tersebut masih dikelola secara amatir,
                        dan hanya penyaluran kegemaran saja. Berikut ini adalah data organisasi keolahragaan Desa
                        Wanakerta.
                    </p>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="col pb-4">
                            <img src="assets/img/klubolahraga.png" alt="" srcset="">
                            <figcaption><i>Data Klub Olahraga Desa Wanakerta</i></figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Keadaan Sosial -->

    <!-- Footer -->
    <!-- <div class="footer">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col">
                <i><img src="assets/logo2.svg"></i>
                <h3 class="text-center" style="color: #ffffff;">Sistem Pelayanan Masyarakat Desa Wanakerta</h3>
                    <div class="col pt-5">
                    <h6 class="fw-bold text-white">Menu</h6>
                        <a href="#" class="me-3 text-decoration-none">Beranda</a>
                        <a href="#visi_misi" class="me-3 text-decoration-none">Visi dan Misi</a>
                        <a href="#profil_desa" class="me-3 text-decoration-none">Profil Desa</a>
                        <a href="#layanan_masyarakat" class="me-3 text-decoration-none">Layanan Masyarakat</a>
                    </div>
                    <div class="col pt-5">
                    <p class="text-center copyright fw-medium">&copy; Copyright 2023 by Desa Wanakerta, All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <footer>
        <div class="footer-content">
            <div class="social-media">
                <!-- Ganti link di bawah dengan link sosial media Anda -->
                <a href="https://youtube.com" target="_blank"><img
                        src="../SIDEWA-WEB/assets/youtube-fill.svg" alt="Youtube"></i></a>
                <a href="https://web.facebook.com/wanakerta.wanakerta.5" target="_blank"><img
                        src="../SIDEWA-WEB/assets/facebook-fill.svg" alt="Facebook"></a>
                <a href="https://instagram.com" target="_blank"><img 
                        src="../SIDEWA-WEB/assets/instagram-line.svg" alt="Instagram"></a>
            </div>
            <div class="copyright">
                &copy; Desa Wanakerta 2023. Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="script.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        AOS.init({
            once: true,
            easing: 'ease-in-out'
        });
        var iconButton = $("button");
        iconButton.on("click", function () {
            $(iconButton).removeClass('aos-animate');
            setTimeout(function () {
                $(iconButton).addClass('aos-animate');
            }, 400);
        });
    </script>

</body>

</html>