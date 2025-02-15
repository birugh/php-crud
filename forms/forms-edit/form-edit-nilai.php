<?php
include("../../config/config.php");

if (!isset($_GET['id'])) {
    header('Location: ../../lists/list-nilai.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM tbl_mapel WHERE id_nilai=$id";
$query = mysqli_query($db, $sql);
$nilai = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

$sql_siswa = "SELECT nisn_siswa, nama_siswa FROM tbl_siswa";
$query_siswa = mysqli_query($db, $sql_siswa);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Nilai Siswa</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <form action="../../processes/proses-edit-nilai.php" method="POST">
        <h3>Edit Nilai Siswa</h3>
        
        <input type="hidden" name="id_nilai" value="<?php echo $nilai['id_nilai']; ?>">
        
        <label for="nisn_siswa">NISN Siswa</label>
        <select name="nisn_siswa" id="nisn_siswa" required>
            <option value="" disabled>Pilih nisn_siswa</option>
            <?php while ($siswa = mysqli_fetch_array($query_siswa)) { ?>
                <option value="<?php echo $siswa['nisn_siswa']; ?>" <?php if ($siswa['nisn_siswa'] == $nilai['nisn_siswa']) echo 'selected'; ?>>
                    <?php echo $siswa['nisn_siswa'] . " - " . $siswa['nama_siswa']; ?>
                </option>
            <?php } ?>
        </select>
        
        <label for="nilai_mtk">Nilai Matematika</label>
        <input type="number" name="nilai_mtk" id="nilai_mtk" value="<?php echo $nilai['nilai_mtk']; ?>" min="0" max="100" required>
        
        <label for="nilai_pjok">Nilai PJOK</label>
        <input type="number" name="nilai_pjok" id="nilai_pjok" value="<?php echo $nilai['nilai_pjok']; ?>" min="0" max="100" required>
        
        <label for="nilai_pabp">Nilai PABP</label>
        <input type="number" name="nilai_pabp" id="nilai_pabp" value="<?php echo $nilai['nilai_pabp']; ?>" min="0" max="100" required>
        
        <label for="nilai_web">Nilai Web</label>
        <input type="number" name="nilai_web" id="nilai_web" value="<?php echo $nilai['nilai_web']; ?>" min="0" max="100" required>
        
        <button type="submit" name="btnSubmit">Update</button>
    </form>
</body>
</html>