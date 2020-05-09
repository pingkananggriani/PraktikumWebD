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
            <div class="fprofil">
                <img src="gambar/wanita.png" height="130px" width="130px">
            </div>
            <div class="Kontak">
                <table align="center" cellpadding="8px">
                    <tr>
                        <td><img src="gambar/icon.png" class="icon"></td>
                        <td>Pingkan Anggriani Pitoy</td>
                    </tr>
                    <tr>
                        <td><img src="gambar/email.png" class="icon"></td>
                        <td>pingkananggriani@gmail.com</td>
                    </tr>
                    <tr>
                        <td><img src="gambar/wa.png" class="icon"></td>
                        <td>+62877622222</td>
                    </tr>
                </table>
            </div>
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