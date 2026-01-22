<form method="post" action="proses_simpan.php">
    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>

    <select name="jenis_kelamin" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir">
    <input type="date" name="tanggal_lahir">
    <textarea name="alamat" placeholder="Alamat"></textarea>
    <input type="email" name="email" placeholder="Email">

    <button type="submit" name="kirim">Kirim</button>
</form>
