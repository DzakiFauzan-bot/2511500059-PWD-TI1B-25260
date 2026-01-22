<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // === SANITASI ===
    $nama_lengkap  = htmlspecialchars(trim($_POST['nama_lengkap']));
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $tempat_lahir  = htmlspecialchars(trim($_POST['tempat_lahir']));
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat        = htmlspecialchars(trim($_POST['alamat']));
    $email         = htmlspecialchars(trim($_POST['email']));

    // === VALIDASI ===
    if ($nama_lengkap == "" || $jenis_kelamin == "") {
        header("Location: biodata.php?status=gagal");
        exit;
    }

    // === INSERT DATA ===
    $sql = "INSERT INTO biodata_pengunjung
            (nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, email )
            VALUES
            ('$nama_lengkap', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$email' )";

    mysqli_query($koneksi, $sql);

    // === PRG (POST-REDIRECT-GET) ===
    header("Location: biodata.php?status=sukses");
    exit;
}
?>


<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'sukses') {
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan";
    }
}
?>
