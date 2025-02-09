<?php 
include("config.php"); 

if (!isset($_GET['id_user'])) { 
    header('Location: list-siswa.php'); 
    exit();
} 

$id = $_GET['id_user']; 

$stmt = $db->prepare("SELECT * FROM tbl_siswa WHERE id_user = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$query = $stmt->get_result();
$siswa = $query->fetch_assoc();

if ($query->num_rows < 1) { 
    die("Data tidak ditemukan..."); 
}
?> 

<!DOCTYPE html> 
<html> 
<head> 
    <title>Formulir Edit Siswa | SMK Coding</title> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body> 
    <form action="proses-edit.php" method="POST"> 
        <h3>Formulir Edit Siswa</h3> 
            <input type="hidden" name="id_user" value="<?php echo $siswa['id_user'] ?>" /> 
            <p> 
                <label for="nama_siswa">Nama </label> 
                <input type="text" name="nama_siswa" placeholder="nama lengkap" value="<?php echo $siswa['nama_siswa'] ?>" required/> 
            </p> 
            <p> 
                <label for="alamat">Alamat </label> 
                <input type="text" name="alamat" placeholder="alamat lengkap" value="<?php echo $siswa['alamat'] ?>" required/> 
            </p> 
            <p> 
                <label for="jenis_kelamin">Jenis Kelamin </label> 
                <?php $jk = $siswa['jenis_kelamin']; ?> 
                <select name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "selected": "" ?>>Laki-laki</option>
                    <option value="Perempuan" <?php echo ($jk == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
                </select>
            </p> 
            <p> 
                <label for="agama">Agama </label> 
                <?php $agama = $siswa['agama']; ?> 
                <select name="agama" id="agama" required> 
                    <option value="Islam" <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option> 
                    <option value="Kristen" <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option> 
                    <option value="Hindu" <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option> 
                    <option value="Budha" <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option> 
                    <option value="Atheis" <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option> 
                </select> 
            </p> 
            <p> 
                <label for="asal_sekolah">Asal Sekolah </label> 
                <input type="text" name="asal_sekolah" placeholder="nama sekolah" value="<?php echo $siswa['asal_sekolah'] ?>" required/> 
            </p> 
            <p> 
                <button type="submit" name="simpan" id="simpan">Simpan</button> 
            </p> 
    </form> 
</body> 
</html>