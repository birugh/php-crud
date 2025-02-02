<?php 
include("config.php"); 
 
if(!isset($_GET['id_user']))
{ 
    header('Location: list-siswa.php'); 
} 
 
$id = $_GET['id_user']; 
 
$sql = "SELECT * FROM tbl_siswa WHERE id_user=$id"; 
$query = mysqli_query($db, $sql); 
$siswa = mysqli_fetch_assoc($query); 
 
if( mysqli_num_rows($query) < 1 ){ 
    die("Data tidak ditemukan..."); 
}
?> 

<!DOCTYPE html> 
<html> 
<head> 
    <title>Formulir Edit Siswa | SMK Coding</title> 
</head> 
 
<body> 
    <header> 
        <h3>Formulir Edit Siswa</h3> 
    </header> 
 
    <form action="proses-edit.php" method="POST"> 
 
        <fieldset> 
 
            <input type="hidden" name="id" value="<?php echo $siswa['id_user'] ?>" /> 
 
        <p> 
            <label for="nama">Nama: </label> 
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama_siswa'] ?>"/> 
        </p> 
        <p> 
            <label for="alamat">Alamat: </label> 
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea> 
        </p> 
        <p> 
            <label for="jenis_kelamin">Jenis Kelamin: </label> 
            <?php $jk = $siswa['jenis_kelamin']; ?> 
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label> 
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label> 
        </p> 
        <p> 
            <label for="agama">Agama: </label> 
            <?php $agama = $siswa['agama']; ?> 
            <select name="agama"> 
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option> 
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option> 
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option> 
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option> 
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option> 
            </select> 
        </p> 
        <p> 
            <label for="sekolah_asal">Sekolah Asal: </label> 
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['asal_sekolah'] ?>" /> 
        </p> 
        <p> 
            <input type="submit" value="Simpan" name="simpan" /> 
        </p> 
 
        </fieldset> 
 
 
    </form> 
 
    </body> 
</html>