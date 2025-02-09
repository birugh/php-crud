<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="proses-pendaftaran.php" method="POST">
        <h3>Formulir Pendaftaran Siswa Baru</h3>
        
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required>
        
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="" disabled selected></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        
        <label for="agama">Agama</label>
        <select name="agama" id="agama" required>
            <option value="" disabled selected></option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Lainnya">Lainnya</option>
        </select>
        
        <label for="sekolah_asal">Asal Sekolah</label>
        <input type="text" name="sekolah_asal" id="sekolah_asal" required>
        
        <button type="submit" name="btnSubmit">Submit</button>
    </form>
</body>
</html>