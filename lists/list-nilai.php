<?php
include("../config/config.php");

$sql = "SELECT tbl_mapel.id_nilai, tbl_mapel.nisn_siswa, tbl_siswa.nama_siswa, tbl_mapel.nilai_mtk, tbl_mapel.nilai_pjok, tbl_mapel.nilai_pabp, tbl_mapel.nilai_web FROM tbl_mapel JOIN tbl_siswa ON tbl_mapel.nisn_siswa = tbl_siswa.nisn_siswa";
$query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Siswa | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="containerTable">
        <h3>Daftar Nilai Siswa</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID Nilai</th>
                    <th>NISN Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Nilai Matematika</th>
                    <th>Nilai PJOK</th>
                    <th>Nilai PABP</th>
                    <th>Nilai Web</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($nilai = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td><?php echo $nilai['id_nilai']; ?></td>
                        <td><?php echo $nilai['nisn_siswa']; ?></td>
                        <td><?php echo $nilai['nama_siswa']; ?></td>
                        <td><?php echo $nilai['nilai_mtk']; ?></td>
                        <td><?php echo $nilai['nilai_pjok']; ?></td>
                        <td><?php echo $nilai['nilai_pabp']; ?></td>
                        <td><?php echo $nilai['nilai_web']; ?></td>
                        <td>
                            <a href="../forms/forms-edit/form-edit-nilai.php?id=<?php echo $nilai['id_nilai']; ?>" class="btn-edit">Edit</a>
                            <a href="../processes/delete/hapus-nilai.php?id_nilai=<?php echo $nilai['id_nilai']; ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>