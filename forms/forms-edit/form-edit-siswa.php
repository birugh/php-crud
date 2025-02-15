<?php
include("../../config/config.php");

if (!isset($_GET['nisn_siswa'])) {
    header('Location: ../lists/list-siswa.php');
}

$nisn_siswa = $_GET['nisn_siswa'];

$sql = "SELECT * FROM tbl_siswa WHERE nisn_siswa = $nisn_siswa";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <form action="../../processes/proses-edit-siswa.php" method="POST">
        <h3>Edit Data Siswa</h3>
        
        <input type="hidden" name="nisn_siswa" value="<?php echo $siswa['nisn_siswa']; ?>">
        
        <label for="nama">Nama</label>
        <input type="text" name="nama_siswa" id="nama" value="<?php echo $siswa['nama_siswa']; ?>" required>
        
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?php echo $siswa['alamat']; ?>" required>
        
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-laki" <?php if ($siswa['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($siswa['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select>
        
        <label for="agama">Agama</label>
        <select name="agama" id="agama" required>
            <option value="Islam" <?php if ($siswa['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
            <option value="Kristen" <?php if ($siswa['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
            <option value="Hindu" <?php if ($siswa['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
            <option value="Budha" <?php if ($siswa['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
            <option value="Lainnya" <?php if ($siswa['agama'] == 'Lainnya') echo 'selected'; ?>>Lainnya</option>
        </select>
        
        <label for="asal_sekolah">Asal Sekolah</label>
        <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?php echo $siswa['asal_sekolah']; ?>" required>
        
        <button type="submit" name="btnSubmit">Update</button>
    </form>
</body>
</html>