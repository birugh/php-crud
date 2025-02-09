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
        <?php if (isset($_GET['status'])): ?>
            <p>
                <?php
                if ($_GET['status'] == 'berhasil')
                {
                    echo "<h4>Pendaftaran siswa baru berhasil!</h4>";
                }
                else
                {
                    echo "<h4>  Pendaftaran gagal!</h4>";
                }
                ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>
