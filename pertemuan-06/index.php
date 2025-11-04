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
      <p>Ini contoh paragraf HTML</p>
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
      <p>
         <strong>NIM:</strong>
         <?php
         echo "$Nim";
         ?>
      </p>

      <P>
         <strong>Nama lengkap:</strong>
         <?php
         echo "$Nama";
         ?>
      </p>   

      <p>
         <strong>Tempat Lahir:</strong>
         <?php
         echo "Tempat_Lahir";
         ?>
      </p>

      <p>
         <strong>Tanggal Lahir:</strong>
         <?php
         echo "Tanggal_Lahir";
         ?>
      </p>


      <p>
         <strong>Hobi:</strong>
         <?php
         echo "Jalan jalan, Main game, Nonton anime";
         ?>
      </p>

      <p>
         <strong>Pasangan:</strong>
         <?php
         echo "Pacaran &#10084;";
         ?>
      </p>

      <p>
         <strong>Pekerjaan:</strong>
         <?php
         echo "Mahasiswa";
         ?>
      </p>

      <p>
         <strong>Nama Orang Tua:</strong>
         <?php
         echo "Nopi Sansia, dan Yedy abdi arsyamsyah";
         ?>
      </p>

      <p>
         <strong>Nama Kakak:</strong>
        <?php
        echo "-";
        ?>
      </p>

      <p>
         <strong>Nama Adek:</strong>
         <?php
         echo "Dzahabiyah Aribah";
         ?>
      </p>
      
      </p>
    </section>
    <section id="contact">
      <h2>kontak kami</h2>
      <form action="" method="get">

        <form action="" method="GET">

          <label for="txtNama">
            <span>Nama:</span>
            <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
          </label>

          <label for="txtEmail">
            <span>Email:</span>
            <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required
              autocomplete="email">
          </label>

          <label for="txtPesan"><span>Pesan Anda:</span>
            <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
            <small id="charCount">0/200 karakter</small>
          </label>

          <button type="submit">Kirim</button>
          <button type="reset">Batal</button>

        </form>
    </section>
  </main>
  <footer>
    <p>&#128525; 2025 Dzaki Fauzan [2511500059]</p>
  </footer>

  <script src="script.js"></script>
</body>