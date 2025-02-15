<?php
include("config.php");

$sql = "SELECT id_user, nama_siswa FROM tbl_siswa";
$query = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Penilaian Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="proses-nilai.php" method="POST">
        <h3>Formulir Penilaian Siswa</h3>
        
        <label for="nisn">NISN</label>
        <select name="nisn" id="nisn" required>
            <option value="" disabled selected>Pilih NISN</option>
            <?php while ($siswa = mysqli_fetch_array($query)) { ?>
                <option value="<?php echo $siswa['id_user']; ?>"><?php echo $siswa['id_user'] . " - " . $siswa['nama_siswa']; ?></option>
            <?php } ?>
        </select>
        
        <label for="nilai_mtk">Nilai Matematika</label>
        <input type="number" name="nilai_mtk" id="nilai_mtk" required>
        
        <label for="nilai_pjok">Nilai PJOK</label>
        <input type="number" name="nilai_pjok" id="nilai_pjok" required>
        
        <label for="nilai_pabp">Nilai PABP</label>
        <input type="number" name="nilai_pabp" id="nilai_pabp" required>
        
        <label for="nilai_web">Nilai Web</label>
        <input type="number" name="nilai_web" id="nilai_web" required>
        
        <button type="submit" name="btnSubmit">Submit</button>
    </form>
</body>
</html>