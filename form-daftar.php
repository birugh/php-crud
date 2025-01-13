<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK RPL</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="post">
        <fieldset>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" require><br><br>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" placeholder="Alamat Anda"></textarea><br><br>
            <label for="jenisKelamin">Jenis Kelamin:</label>
            <select name="jenisKelamin" id="jenisKelamin">
                <option disabled selected></option>
                <option value="lakiLaki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select><br><br>
            <label for="alamat">Asal Sekolah:</label>
            <input type="text" name="alamat" placeholder="Asal sekolah Anda" require><br><br>
            <input type="submit" name="btnSubmit" id="btnSubmit" value="Kirim">
        </fieldset>
    </form>
</body>
</html>