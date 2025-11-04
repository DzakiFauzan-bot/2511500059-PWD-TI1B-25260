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
            if ($grade2 == "A") {
                $status2 = "Lulus";
            } elseif ($grade2 == "A-") {
                $status2 = "Lulus";
            } elseif ($grade2 == "B+") {
                $status2 = "Lulus";
            } elseif ($grade2 == "B") {
                $status2 = "Lulus";
            } elseif ($grade2 == "B-") {
                $status2 = "Lulus";
            } elseif ($grade2 == "C+") {
                $status2 = "Lulus";
            } elseif ($grade2 == "C") {
                $status2 = "Lulus";
            } elseif ($grade2 == "C-") {
                $status2 = "Lulus";
            } else {
                $status2 = "Tidak Lulus";
            }
            echo $status2;
            ?>
        </p>

        <hr>

        <p>
            <strong>Nama Matakuliah :</strong>
            <?php
            $namaMatkul3 = "Logika Informatika";
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
            <strong>Kehadiran :</strong>
            <?php
            $nilaiHadir3 = "100";
            echo $nilaiHadir3;
            ?>
        </p>

        <p>
            <strong>Tugas :</strong>
            <?php
            $nilaiTugas3 = "100";
            echo $nilaiTugas3;
            ?>
        </p>

        <p>
            <strong>UTS :</strong>
            <?php
            $nilaiUTS3 = "100";
            echo $nilaiUTS3 ;
            ?>
        </p>

        <p>
            <strong>UAS :</strong>
            <?php
            $nilaiUAS3 = "100";
            echo $nilaiUAS3;
            ?>
        </p>

        <p>
            <strong>Nilai Akhir :</strong>
            <?php
            $nilaiAkhir3 = (0.1 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
            echo $nilaiAkhir3;
            ?>
        </p>

        <p>
             <strong>Grade</strong>
             <?php
            if ($nilaiHadir3 < 65) {
                $grade3 = "E";
            } elseif ($nilaiAkhir3 >= 91) {
                $grade3 = "A";
            } elseif ($nilaiAkhir3 >= 80) {
                $grade3 = "A-";
            } elseif ($nilaiAkhir3 >= 76) {
                $grade3 = "B+";
            } elseif ($nilaiAkhir3 >= 71) {
                $grade3 = "B";
            } elseif ($nilaiAkhir3 >= 66) {
                $grade3 = "B-";
            } elseif ($nilaiAkhir3 >= 61) {
                $grade3 = "C+";
            } elseif ($nilaiAkhir3 >= 56) {
                $grade3 = "C";
            } elseif ($nilaiAkhir3 >= 51) {
                $grade3 = "C-";
            } elseif ($nilaiAkhir3 >= 36) {
                $grade3 = "D";
            } else {
                $grade3 = "E";
            }
            echo $grade3;
            ?>
        </p>

        <p>
            <strong>Angka Mutu :</strong>
            <?php
            if ($nilaiHadir3 < 70) {
                $mutu3 = "0.00";
            } elseif ($nilaiAkhir3 >= 91) {
                $mutu3 = "4.00";
            } elseif ($nilaiAkhir3 >= 80) {
                $mutu3 = "3.70";
            } elseif ($nilaiAkhir3 >= 76) {
                $mutu3 = "3.30";
            } elseif ($nilaiAkhir3 >= 71) {
                $mutu3 = "3.00";
            } elseif ($nilaiAkhir3 >= 66) {
                $mutu3 = "2.70";
            } elseif ($nilaiAkhir3 >= 61) {
                $mutu3 = "2.30";
            } elseif ($nilaiAkhir3 >= 56) {
                $mutu3 = "2.00";
            } elseif ($nilaiAkhir3 >= 51) {
                $mutu3 = "1.70";
            } elseif ($nilaiAkhir3 >= 36) {
                $mutu3 = "1.00";
            } else {
                $mutu3 = "0.00";
            }
            echo $mutu3;
            ?>
        </p>

        <p>
            <strong>Bobot :</strong>
            <?php
            $bobot3 = $mutu3 * $sksMatkul3;
            echo $bobot3;
            ?>
        </p>

        <p>
            <strong>Status :</strong>
            <?php
            if ($grade3 == "A") {
                $status3 = "Lulus";
            } elseif ($grade3 == "A-") {
                $status3 = "Lulus";
            } elseif ($grade3 == "B+") {
                $status3 = "Lulus";
            } elseif ($grade3 == "B") {
                $status3 = "Lulus";
            } elseif ($grade3 == "B-") {
                $status3 = "Lulus";
            } elseif ($grade3 == "C+") {
                $status3 = "Lulus";
            } elseif ($grade3 == "C") {
                $status3 = "Lulus";
            } elseif ($grade3 == "C-") {
                $status3 = "Lulus";
            } else {
                $status3 = "Tidak Lulus";
            }
            echo $status3;
            ?>
        </p>
        <!-- Matkul 3 end muampos -->

        <!--MATKUL 4 -->
        <hr>
        <p>
            <strong>Nama Matakuliah :</strong>
            <?php
            $namaMatkul4 = "Pemrograman Web";
            echo $namaMatkul4;
            ?>
        </p>
        <p>
             <strong>SKS :</strong>
            <?php
            $sksMatkul4 = "8";
            echo $sksMatkul4;
            ?>
        </p>

        <p>
            <strong>Kehadiran :</strong>
            <?php
            $nilaiHadir4 = "100";
            echo $nilaiHadir4;
            ?>
        </p>

        <p>
            <strong>Tugas :</strong>
            <?php
            $nilaiTugas4 = "100";
            echo $nilaiTugas4;
            ?>
        </p>
        
        <p>
            <strong>UTS :</strong>
            <?php
            $nilaiUTS4 = "100";
            echo $nilaiUTS4 ;
            ?>
        </p>

        <p>
            <strong>UAS :</strong>
            <?php
            $nilaiUAS4 = "100";
            echo $nilaiUAS4;
            ?>
        </p>

        <p>
            <strong>Nilai Akhir :</strong>
            <?php
            $nilaiAkhir4 = (0.1 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
            echo $nilaiAkhir4;
            ?>
        </p>

        <p>
            <strong>Grade</strong>
              <?php
            if ($nilaiHadir4 < 65) {
                $grade4 = "E";
            } elseif ($nilaiAkhir4 >= 91) {
                $grade4 = "A";
            } elseif ($nilaiAkhir4 >= 80) {
                $grade4 = "A-";
            } elseif ($nilaiAkhir4 >= 76) {
                $grade4 = "B+";
            } elseif ($nilaiAkhir4 >= 71) {
                $grade4 = "B";
            } elseif ($nilaiAkhir4 >= 66) {
                $grade4 = "B-";
            } elseif ($nilaiAkhir4 >= 61) {
                $grade4 = "C+";
            } elseif ($nilaiAkhir4 >= 56) {
                $grade4 = "C";
            } elseif ($nilaiAkhir4 >= 51) {
                $grade4 = "C-";
            } elseif ($nilaiAkhir4 >= 36) {
                $grade4 = "D";
            } else {
                $grade4 = "E";
            }
            echo $grade4;
            ?>
        </p>

        <p>
            <strong>Angka Mutu :</strong>
            <?php
            if ($nilaiHadir4 < 70) {
                $mutu4 = "0.00";
            } elseif ($nilaiAkhir4 >= 91) {
                $mutu4 = "4.00";
            } elseif ($nilaiAkhir4 >= 80) {
                $mutu4 = "3.70";
            } elseif ($nilaiAkhir4 >= 76) {
                $mutu4 = "3.30";
            } elseif ($nilaiAkhir4 >= 71) {
                $mutu4 = "3.00";
            } elseif ($nilaiAkhir4 >= 66) {
                $mutu4 = "2.70";
            } elseif ($nilaiAkhir4 >= 61) {
                $mutu4 = "2.30";
            } elseif ($nilaiAkhir4 >= 56) {
                $mutu4 = "2.00";
            } elseif ($nilaiAkhir4 >= 51) {
                $mutu4 = "1.70";
            } elseif ($nilaiAkhir4 >= 36) {
                $mutu4 = "1.00";
            } else {
                $mutu4 = "0.00";
            }
            echo $mutu4;
            ?>
        </p>

        <p>
            <strong>Bobot :</strong>
            <?php
            $bobot4 = $mutu4 * $sksMatkul4;
            echo $bobot4;
            ?>
        </p>

        <p>
            <strong>Status :</strong>
            <?php
            if ($grade4 == "A") {
                $status4 = "Lulus";
            } elseif ($grade4 == "A-") {
                $status4 = "Lulus";
            } elseif ($grade4 == "B+") {
                $status4 = "Lulus";
            } elseif ($grade4 == "B") {
                $status4 = "Lulus";
            } elseif ($grade4 == "B-") {
                $status4 = "Lulus";
            } elseif ($grade4 == "C+") {
                $status4 = "Lulus";
            } elseif ($grade4 == "C") {
                $status4 = "Lulus";
            } elseif ($grade4 == "C-") {
                $status4 = "Lulus";
            } else {
                $status4 = "Tidak Lulus";
            }
            echo $status4;
            ?>
        </p>

        <hr>
        <p>
            <strong>Nama Matakuliah :</strong>
            <?php
            $namaMatkul5 = "Konsep Basis Data";
            echo $namaMatkul5;
            ?>
        </p>

        <p>
            <strong>SKS :</strong>
            <?php
            $sksMatkul5 = "8";
            echo $sksMatkul5;
            ?>
        </p>

        <p>
            <strong>Kehadiran :</strong>
            <?php
            $nilaiHadir5 = "100";
            echo $nilaiHadir5;
            ?>
        </p>

        <p>
            <strong>Tugas :</strong>
            <?php
            $nilaiTugas5 = "100";
            echo $nilaiTugas5;
            ?>
        </p>

        <p>
            <strong>UTS :</strong>
            <?php
            $nilaiUTS5 = "100";
            echo $nilaiUTS5 ;
            ?>
        </p>

        <p>
            <strong>UAS :</strong>
            <?php
            $nilaiUAS5 = "100";
            echo $nilaiUAS5;
            ?>
        </p>

        <p>
            <strong>Nilai Akhir :</strong>
            <?php
            $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
            echo $nilaiAkhir5;
            ?>
        </p>

        <p>
            <strong>Grade</strong>
              <?php
            if ($nilaiHadir5 < 65) {
                $grade5 = "E";
            } elseif ($nilaiAkhir5 >= 91) {
                $grade5 = "A";
            } elseif ($nilaiAkhir5 >= 80) {
                $grade5 = "A-";
            } elseif ($nilaiAkhir5 >= 76) {
                $grade5 = "B+";
            } elseif ($nilaiAkhir5 >= 71) {
                $grade5 = "B";
            } elseif ($nilaiAkhir5 >= 66) {
                $grade5 = "B-";
            } elseif ($nilaiAkhir5 >= 61) {
                $grade5 = "C+";
            } elseif ($nilaiAkhir5 >= 56) {
                $grade5 = "C";
            } elseif ($nilaiAkhir5 >= 51) {
                $grade5 = "C-";
            } elseif ($nilaiAkhir5 >= 36) {
                $grade5 = "D";
            } else {
                $grade5 = "E";
            }
            echo $grade5;
            ?>
        </p>

        <p>
            <strong>Angka Mutu :</strong>
            <?php
            if ($nilaiHadir5 < 70) {
                $mutu5 = "0.00";
            } elseif ($nilaiAkhir5 >= 91) {
                $mutu5 = "4.00";
            } elseif ($nilaiAkhir5 >= 80) {
                $mutu5 = "3.70";
            } elseif ($nilaiAkhir5 >= 76) {
                $mutu5 = "3.30";
            } elseif ($nilaiAkhir5 >= 71) {
                $mutu5 = "3.00";
            } elseif ($nilaiAkhir5 >= 66) {
                $mutu5 = "2.70";
            } elseif ($nilaiAkhir5 >= 61) {
                $mutu5 = "2.30";
            } elseif ($nilaiAkhir5 >= 56) {
                $mutu5 = "2.00";
            } elseif ($nilaiAkhir5 >= 51) {
                $mutu5 = "1.70";
            } elseif ($nilaiAkhir5 >= 36) {
                $mutu5 = "1.00";
            } else {
                $mutu5 = "0.00";
            }
            echo $mutu5;
            ?>
        </p>

        <p>
            <strong>Bobot :</strong>
            <?php
            $bobot5 = $mutu5 * $sksMatkul5;
            echo $bobot5;
            ?>
        </p>

        <p>
            <strong>Status :</strong>
            <?php
            if ($grade5 == "A") {
                $status5 = "Lulus";
            } elseif ($grade5 == "A-") {
                $status5 = "Lulus";
            } elseif ($grade5 == "B+") {
                $status5 = "Lulus";
            } elseif ($grade5 == "B") {
                $status5 = "Lulus";
            } elseif ($grade5 == "B-") {
                $status5 = "Lulus";
            } elseif ($grade5 == "C+") {
                $status5 = "Lulus";
            } elseif ($grade5 == "C") {
                $status5 = "Lulus";
            } elseif ($grade5 == "C-") {
                $status5 = "Lulus";
            } else {
                $status5 = "Tidak Lulus";
            }
            echo $status5;
            ?>
        </p>
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