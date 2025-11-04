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
         echo "$Tempat_lahir";
         ?>
      </p>

      <p>
         <strong>Tanggal Lahir:</strong>
         <?php
         echo "$Tanggal_lahir";
         ?>
      </p>


      <p>
         <strong>Hobi:</strong>
         <?php
         echo "$Hobi";
         ?>
      </p>

      <p>
         <strong>Pasangan:</strong>
         <?php
         echo "$Pacaran";
         ?>
      </p>

      <p>
         <strong>Pekerjaan:</strong>
         <?php
         echo "$Pekerjaan";
         ?>
      </p>

      <p>
         <strong>Nama Orang Tua:</strong>
         <?php
         echo "$Nama_Orang_Tua";
         ?>
      </p>

      <p>
         <strong>Nama Kakak:</strong>
        <?php
        echo "$Nama_Kakak";
        ?>
      </p>

      <p>
         <strong>Nama Adek:</strong>
         <?php
         echo "$Nama_Adek";
         ?>
      </p>

      </p>
    </section>

    <section id="ipk">
        <h2>Nilai saya</h2>
        <!--MATKUL 1 -->
        <p>
            <strong>Nama Matakuliah :</strong>
            <?php
            $namaMatkul1 = "Kalkulus";
            echo $namaMatkul1;
            ?>
        </p>

        <p>
            <strong>SKS :</strong>
            <?php
            $sksMatkul1 = "8";
            echo $sksMatkul1;
            ?>
        </p>

        <p>
            <strong>Kehadiran :</strong>
            <?php
            $nilaiHadir1 = "100";
            echo $nilaiHadir1;
            ?>
        </p>

        <p>
            <strong>Tugas :</strong>
            <?php
            $nilaiTugas1 = "100";
            echo $nilaiTugas1;
            ?>
        </p>

        <p>
            <strong>UTS :</strong>
            <?php
            $nilaiUTS1 = "100";
            echo $nilaiUTS1 ;
            ?>
        </p>

        <p>
            <strong>UAS :</strong>
            <?php
            $nilaiUAS1 = "100";
            echo $nilaiUAS1;
            ?>        
        </p>

        <p>
            <strong>Nilai Akhir :</strong>
            <?php
            $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
            echo $nilaiAkhir1;
            ?>
        </p>

        <p>
            <strong>Grade :</strong>
            <?php
            if ($nilaiHadir1 < 70) {
                $grade1 = "E";
            } elseif ($nilaiAkhir1 >= 91) {
                $grade1 = "A";
            } elseif ($nilaiAkhir1 >= 80) {
                $grade1 = "A-";
            } elseif ($nilaiAkhir1 >= 76) {
                $grade1 = "B+";
            } elseif ($nilaiAkhir1 >= 71) {
                $grade1 = "B";
            } elseif ($nilaiAkhir1 >= 66) {
                $grade1 = "B-";
            } elseif ($nilaiAkhir1 >= 61) {
                $grade1 = "C+";
            } elseif ($nilaiAkhir1 >= 56) {
                $grade1 = "C";
            } elseif ($nilaiAkhir1 >= 51) {
                $grade1 = "C-";
            } elseif ($nilaiAkhir1 >= 36) {
                $grade1 = "D";
            } else {
                $grade1 = "E";
            }
            echo $grade1;
            ?>
        </p>

        <p>
            <strong>Angka Mutu :</strong>
            <?php
            if ($nilaiHadir1 < 70) {
                $mutu1 = "0.00";
            } elseif ($nilaiAkhir1 >= 91) {
                $mutu1 = "4.00";
            } elseif ($nilaiAkhir1 >= 80) {
                $mutu1 = "3.70";
            } elseif ($nilaiAkhir1 >= 76) {
                $mutu1 = "3.30";
            } elseif ($nilaiAkhir1 >= 71) {
                $mutu1 = "3.00";
            } elseif ($nilaiAkhir1 >= 66) {
                $mutu1 = "2.70";
            } elseif ($nilaiAkhir1 >= 61) {
                $mutu1 = "2.30";
            } elseif ($nilaiAkhir1 >= 56) {
                $mutu1 = "2.00";
            } elseif ($nilaiAkhir1 >= 51) {
                $mutu1 = "1.70";
            } elseif ($nilaiAkhir1 >= 36) {
                $mutu1 = "1.00";
            } else {
                $mutu1 = "0.00";
            }
            echo $mutu1;
            ?>
        </p>

        <p>
            <strong>Bobot :</strong>
            <?php
            $bobot1 = $mutu1 * $sksMatkul1;
            echo $bobot1;
            ?>
        </p>

        <p>
            <strong>Status :</strong>
            <?php
            if ($grade1 == "A") {
                $status1 = "Lulus";
            } elseif ($grade1 == "A-") {
                $status1 = "Lulus";
            } elseif ($grade1 == "B+") {
                $status1 = "Lulus";
            } elseif ($grade1 == "B") {
                $status1 = "Lulus";
            } elseif ($grade1 == "B-") {
                $status1 = "Lulus";
            } elseif ($grade1 == "C+") {
                $status1 = "Lulus";
            } elseif ($grade1 == "C") {
                $status1 = "Lulus";
            } elseif ($grade1 == "C-") {
                $status1 = "Lulus";
            } else {
                $status1 = "Tidak Lulus";
            }
            echo $status1;
            ?>
        </p>
        <!-- Matkul 1 end muampos -->

        <!--MATKUL 2 -->
        <hr>
        <p>
            <strong>Nama Matakuliah :</strong>
            <?php
            $namaMatkul2 = "Aplikasi Perkantoran";
            echo $namaMatkul2;
            ?>
        </p>

        <p>
            <strong>SKS :</strong>
            <?php
            $sksMatkul2 = "8";
            echo $sksMatkul2;
            ?>
        </p>

        <p>
            <strong>Kehadiran :</strong>
            <?php
            $nilaiHadir2 = "100";
            echo $nilaiHadir2;
            ?>
        </p>

        <p>
            <strong>Tugas :</strong>
            <?php
            $nilaiTugas2 = "100";
            echo $nilaiTugas2;
            ?>
        </p>

        <p>
            <strong>UTS :</strong>
            <?php
            $nilaiUTS2 = "100";
            echo $nilaiUTS2 ;
            ?>
        </p>

        <p>
            <strong>UAS :</strong>
            <?php
            $nilaiUAS2 = "100";
            echo $nilaiUAS2;
            ?>
        </p>

        <p>
            <strong>Nilai Akhir :</strong>
            <?php
            $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
            echo $nilaiAkhir2;
            ?>
        </p>

        <p>
            <strong>Grade</strong>
             <?php
            if ($nilaiHadir2 < 65) {
                $grade2 = "E";
            } elseif ($nilaiAkhir2 >= 91) {
                $grade2 = "A";
            } elseif ($nilaiAkhir2 >= 80) {
                $grade2 = "A-";
            } elseif ($nilaiAkhir2 >= 76) {
                $grade2 = "B+";
            } elseif ($nilaiAkhir2 >= 71) {
                $grade2 = "B";
            } elseif ($nilaiAkhir2 >= 66) {
                $grade2 = "B-";
            } elseif ($nilaiAkhir2 >= 61) {
                $grade2 = "C+";
            } elseif ($nilaiAkhir2 >= 56) {
                $grade2 = "C";
            } elseif ($nilaiAkhir2 >= 51) {
                $grade2 = "C-";
            } elseif ($nilaiAkhir2 >= 36) {
                $grade2 = "D";
            } else {
                $grade2 = "E";
            }
            echo $grade2;
            ?>
        </p>

        <p>
            <strong>Angka Mutu :</strong>
            <?php
            if ($nilaiHadir2 < 70) {
                $mutu2 = "0.00";
            } elseif ($nilaiAkhir2 >= 91) {
                $mutu2 = "4.00";
            } elseif ($nilaiAkhir2 >= 80) {
                $mutu2 = "3.70";
            } elseif ($nilaiAkhir2 >= 76) {
                $mutu2 = "3.30";
            } elseif ($nilaiAkhir2 >= 71) {
                $mutu2 = "3.00";
            } elseif ($nilaiAkhir2 >= 66) {
                $mutu2 = "2.70";
            } elseif ($nilaiAkhir2 >= 61) {
                $mutu2 = "2.30";
            } elseif ($nilaiAkhir2 >= 56) {
                $mutu2 = "2.00";
            } elseif ($nilaiAkhir2 >= 51) {
                $mutu2 = "1.70";
            } elseif ($nilaiAkhir2 >= 36) {
                $mutu2 = "1.00";
            } else {
                $mutu2 = "0.00";
            }
            echo $mutu2;
            ?>
        </p>

        <p>
            <strong>Bobot :</strong>
            <?php
            $bobot2 = $mutu2 * $sksMatkul2;
            echo $bobot2;
            ?>
        </p>

        <p>
            <strong>Status :</strong>
            <?php
            if ($grade1 == "A") {
                $status1 = "Lulus";
            } elseif ($grade1 == "A-") {
                $status1 = "Lulus";
            } elseif ($grade1 == "B+") {
                $status1 = "Lulus";
            } elseif ($grade1 == "B") {
                $status1 = "Lulus";
            } elseif ($grade1 == "B-") {
                $status1 = "Lulus";
            } elseif ($grade1 == "C+") {
                $status1 = "Lulus";
            } elseif ($grade1 == "C") {
                $status1 = "Lulus";
            } elseif ($grade1 == "C-") {
                $status1 = "Lulus";
            } else {
                $status1 = "Tidak Lulus";
            }
            echo $status1;
            ?>
        </p>
        <hr>
        <p>
            <strong>Nama Matakuliah :</strong>
            <?php
            $namaMatkul2 = "Logika Informatika";
            echo $namaMatkul3;
            ?>
        </p>

        <p>
            
            <strong>SKS :</strong>
            <?php
            $sksMatkul3 = "8";
            echo $sksMatkul3;
            ?>
        </p>

        <p>
            <strong></strong>
        </p>

        <p>
            <strong></strong>
        </p>
        
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <hr>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <hr>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <p><strong></strong></p>
        <hr>
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