<?php
session_start();

$sesnama = "";
if (isset($_SESSION["sesnama"])):
  $sesnama = $_SESSION["sesnama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
      &#9776;
    </button>
    <nav>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#contact">Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="home">
      <h2>Selamat Datang</h2>
      <?php
      echo "halo dunia!<br>";
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="about">
        <?php
        $Nama = "Dzaki Fauzan";
        $Nim = "2511500059";
        $Tempat_lahir = "Pangkalpinang";
        $Tanggal_lahir = "Mei 2007";
        $Hobi = "Jalan jalan, Main game, Nonton anime";
        $Pacaran = "Pacaran &#10084;";
        $Pekerjaan = "Mahasiswa";
        $Nama_Orang_Tua = "Nopi Sansia, dan Yedy abdi arsyamsyah";
        $Nama_Kakak = "-";
        $Nama_Adek = "Dzahabiyah Aribah";
        ?>

      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $Nim;
        ?>
      </p>

      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>

      <p><strong>Tempat Lahir:</strong>
        <?php
        echo $Tempat_lahir;
        ?>
      </p>
      
      <p><strong>Tanggal Lahir:</strong>
        <?php
        echo $Tanggal_lahir;
        ?>
      </p>

      <p><strong>Hobi:</strong>
        <?php
        echo $Hobi;
        ?>
      </p>

      <p><strong>Pasangan:</strong>
        <?php
        echo $Pacaran;
        ?>
      </p>

      <p><strong>Pekerjaan:</strong>
        <?php
        echo $Pekerjaan;
        ?>
       </p>
       
      <p><strong>Nama Orang Tua:</strong>
        <?php
        echo $Nama_Orang_Tua;
        ?>
      </p>
      
      <p><strong>Nama Kakak:</strong>
        <?php
        echo $Nama_Kakak;
        ?>
      </p>

      <p><strong>Nama Adek:</strong>
        <?php
        echo $Nama_Adek;
        ?>
      </p>

    </section>
   
      <section id="about">
      <h2>Tentang Saya</h2>
      <p>
      <p><strong>NIM:</strong>2511500059
      <P><strong>Nama lengkap:</strong>Dzaki Fauzan &#128526;
      <p><strong>Tempat Lahir:</strong>Pangkalpinang
      <p><strong>Tanggal Lahir:</strong> Mei 2007
      <p><strong>Hobi:</strong> Jalan jalan, Main game, Nonton anime
      <p><strong>Pasangan:</strong>Pacaran &#10084;
      <p><strong>Pekerjaan:</strong>Mahasiswa
      <p><strong>Nama Orang Tua:</strong>Nopi Sansia, dan Yedy abdi arsyamsyah
      <p><strong>Nama Kakak:</strong>-
      <p><strong>Nama Adek:</strong>Dzahabiyah Aribah
      </p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>

      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 Yohanes Setiawan Japriadi [0344300002]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>