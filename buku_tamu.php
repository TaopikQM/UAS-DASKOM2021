<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>buku tamu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style-web.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <br><br>
    <div class="container">
        <br>
        <header class="header">
            <a name="atas">
                <h1>TM PROJECT</h1>
                <p>(Mahasiswa)</p>
                <hr>
        </header>
        <br>
        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="tentang.html#">About Me</a>
            <a href="kontak.html">Artikel</a>
            <a href="buku_tamu.html">Buku Tamu</a>
        </nav>


        <h2>Form Buku Tamu</h2>
        <form method="Post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div>
                <label>Nama Lengkap:</label><br>
                <input type="text" name="nama_lengkap" placeholder="Masukan Nama Lengkap : " size="55"><br><br>
            </div>
            <div>
                Jenis Kelamin:<br>
                Laki-Laki <input type="radio" name="jenis_kelamin" value="L">
                Perempuan <input type="radio" name="jenis_kelamin" value="P">
                <br><br>
            </div>
            <div>
                Alamat Tinggal:<br>
                <input type="text" name="alamat_tinggal" placeholder="Masukan Alamat : " size="55"><br><br>
            </div>
            <div>
                Email:<br>
                <input type="text" name="email" placeholder="Contoh : 12345678@gmail.com  " size="55"><br><br>
            </div>
            <div>
                Aktif pada Sosial Media:<br>
                <input type="checkbox" name="medsos" value="Facebook">Facebook
                <input type="checkbox" name="medsos" value="Twitter">Twitter
                <input type="checkbox" name="medsos" value="Instagram">Instagram
                <input type="checkbox" name="medsos" value="path">path
                <br><br>
            </div>
            <div>
                Mengetahui web ini dari :<br>
                <select name="info">
                    <option selected="select">-=Pilih=-</option>
                    <option value="web udinus">Web Udinus</option>
                    <option value="surat kabar">Surat Kabar</option>
                    <option value="teman">Teman</option>
                    <option value="browsing">Browsing</option>
                </select>
                <br><br>
            </div>
            <div>
                Pesan:<br>
                <textarea name="pesan" placeholder="Silakan Tulis Pesan " cols="40" rows="3"></textarea>
            </div>
            <br><br>
            <div>
                <input type="submit" value="Kirim">
                <input type="reset" value="Batal">
            </div>

        </form>
        <br><br>
        <div>
            <?php
            if (isset($_POST['nama_lengkap'])) {
                $nama = $_POST['nama_lengkap'];
                $jenis = $_POST['jenis_kelamin'];
                $alamat = $_POST['alamat_tinggal'];
                $email = $_POST['email'];
                $medsos = $_POST['medsos'];
                $info = $_POST['info'];
                $pesan = $_POST['pesan'];
                echo "Nama :$nama<br>
                    Jenis Kelamin :$jenis<br>
                    Alamat : $alamat<br>
                    Email : $email<br>
                    Media Sosial : $medsos<br>
                    Mengetahui web ini dari: $info<br>
                    Pesan : $pesan
                    ";
            }
            ?>
        </div>
        <br>

    </div>

    <p align="right"><a href="#atas">
            <img src="icon-atas.png" width="50px" height="50px">
        </a></p>
    <hr>
    <center>
        <footer style="background-color: rgb(180, 179, 179); border-radius: 0px 0px 0px 0px ; padding: 10px 10px;">
            Copyright &copy; 2021 by Taopik QM
        </footer>
    </center>
</body>

</html>
