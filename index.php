<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa | SMK RPL</title>
</head>
<body>
    <header>
        <h3>Pendaftaran siswa</h3>
        <h1>SMK RPL</h1>
    </header>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])):?>
        <p>
            <?php
                if($_GET['status'] == 'berhasil')
                {
                    echo "Pendaftaran Berhasil!";
                }
                else if($_GET['status'] == 'gagal')
                {
                    echo "Pendaftaran Gagal!";
                }
            ?>
        </p>
    <?php endif?>
</body>
</html>