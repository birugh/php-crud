<!DOCTYPE html>
<html>
<head>
    <title>SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="containerIndex">
        <h3>Pendaftaran Siswa Baru</h3>
        <a href="forms/form-daftar.php">Daftar Siswa</a>
        <a href="lists/list-siswa.php">List Pendaftar</a><br>
        <a href="forms/form-nilai.php">Input Nilai</a>
        <a href="lists/list-nilai.php">List Nilai</a>
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