<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List siswa terdaftar</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <nav>
        <a href="form-daftar.php"> Tambah baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
            $query = "SELECT * FROM tbl_siswa";
            $sql = mysqli_fetch_array($db, $query)

            while($siswa = mysqli_fetch_array($sql))
            {
                echo "<tr>";
                echo "<td>" . $siswa[id_user] . "</td>";
                echo "<td>" . $siswa[nama_siswa] . "</td>";
                echo "<td>" . $siswa[alamat] . "</td>";
                echo "<td>" . $siswa[jenis_kelamin] . "</td>";
                echo "<td>" . $siswa[agama] . "</td>";
                echo "<td>" . $siswa[asal_sekolah] . "</td>";
                echo "</tr>";
                
                echo "<tr>";
                echo "<a href='form.edit.php?id=>" . $siswa[id_user] . "";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>