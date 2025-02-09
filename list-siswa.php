<?php
include("config.php");

$sql = "SELECT * FROM tbl_siswa";
$query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="containerTable">
        <h3>Daftar Siswa</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($siswa = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo $siswa['id_user']; ?></td>
                        <td><?php echo $siswa['nama_siswa']; ?></td>
                        <td><?php echo $siswa['alamat']; ?></td>
                        <td><?php echo $siswa['jenis_kelamin']; ?></td>
                        <td><?php echo $siswa['agama']; ?></td>
                        <td><?php echo $siswa['asal_sekolah']; ?></td>
                        <td>
                            <a href="form-edit.php?id_user=<?php echo $siswa['id_user']; ?>" class="btn-edit">Edit</a>
                            <a href="hapus.php?id_user=<?php echo $siswa['id_user']; ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>