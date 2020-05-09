<?php 
    require 'function.php';

    if( !isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Website Universitas Udayana</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="menu">
        <div class="tag">
            <p style="font-size: small;"><b>UNIVERSITAS UDAYANA</b><br>
            <i>Unggul, Mandiri, Berbudaya</i></p>
        </div>
        <table cellpadding="20px" class="tableMenu">
            <tr>
                <td><a href="index.php">HOME</a></td>
                <td><a href="about.php">TENTANG</a></td>
                <td><a href="pengajar.php">PENGAJAR</a></td>
                <td><a href="kontak.php">KONTAK</a></td>
            </tr>
        </table>
    </div>
    <div class="kiri">
            <section class="logo">
                <img class="logounud" src="gambar/logo.png" alt="unud" height="150px" width="120"/>
            </section>
            <section class="isikiri">
                <h3>Artikel Populer</h3>
            </section>
            <section class="isi-kiri">
                <a href="#">
                    <h4>Desain Website</h4>
                </a>
            </section>
            <section class="isi-kiri">
                <a href="#">
                    <h4>HTML</h4>
                </a>
            </section>
            <section class="isi-kiri">
                <a href="#">
                    <h4>CSS</h4>
                </a>
            </section>
            <section class="isi-kiri">
                <a href="logout.php">
                    <h4>Logout</h4>
                </a>
            </section>
        </div>
    <div class="kanan">
        <section class="content">
            <h1>Visi</h1>
            <p>Terwujudnya sebuah organisasi penjaminan mutu yang profesional untuk mencapai VISI Unud yaitu : Unggul, Mandiri dan Berbudaya.
            </p>
            <h1>Misi</h1>
             <img style="width: 400px; float: right; margin-right: 20px;" src="gambar/tentang.jpg" alt="Unud">
            <ol>
                <li><p>Menyelenggarakan pendidikan tinggi yang bermutu dan menghasilkan lulusan yang memiliki moral/etika/akhlak dan integritas yang tinggi sesuai dengan tuntutan masyarakat lokal, nasional, dan internasional;</li>
                <li><p>Mengembangkan penelitian dan pengabdian kepada masyarakat sesuai dengan kepentingan masyarakat dan bangsa; </li>
                <li><p>Memberdayakan Unud sebagai lembaga yang menghasilkan dan mengembangkan pengetahuan, teknologi, dan budaya yang dapat dimanfaatkan untuk kesejahteraan masyarakat; dan </li>
                <li><p>Menghasilkan karya inovatif dan prospektif bagi kemajuan Unud serta perekonomian nasional.  </li>
            </ol>
            <h1>Tujuan</h1>
            <ol>
                <li><p>Menghasilkan lulusan bermutu yang memiliki kompetensi tinggi dalam penguasaan ilmu pengetahuan, teknologi, dan seni; </li>
                <li><p>Meningkatkan kapasitas Unud dalam memberikan akses pelayanan pendidikan kepada masyarakat; </li>
                <li><p>Mengembangkan tata kelola Unud yang sehat melalui optimalisasi peran organ organisasi sesuai dengan prinsip badan layanan umum;  </li>
                <li><p>Menjalin kerja sama di berbagai bidang untuk meningkatkan mutu tridharma perguruan tinggi;  </li>
                <li><p>Menghasilkan penelitian yang bermutu, relevan, dan berdaya saing sesuai dengan perkembangan ilmu pengetahuan, teknologi, dan seni; dan </li>
                <li><p>Menghasilkan publikasi ilmiah nasional, internasional, dan kekayaan intelektual untuk kepentingan masyarakat.</li>
            </ol>
        </section>
    </div>
    <div class="footer">
        <h2>UNIVERSITAS UDAYANA</h1>
            <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
            <h4>Phone Number: +62 (361) 701954, 704845</h4>
            <h4>Fax: +62 (361) 701907</h4>
            <h4>Email: info@unud.ac.id</h4>
    </div>
</body>
</html>