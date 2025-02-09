<!DOCTYPE html>
<html>
<head>
    <title>SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="containerIndex">
        <h3>Pendaftaran Siswa Baru</h3>
        <a href="form-daftar.php">Daftar Baru</a>
        <a href="list-siswa.php">Pendaftar</a>
    </div>
    <?php if (isset($_GET['status'])): ?>
        <p>
            <?php
            if ($_GET['status'] == 'berhasil')
            {
                echo "Pendaftaran siswa baru berhasil!";
            }
            else
            {
                echo "Pendaftaran gagal!";
            }
            ?>
        </p>
    <?php endif; ?>
</body>
</html>
