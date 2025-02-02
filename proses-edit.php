<?php 
include("config.php"); 

if (isset($_POST['simpan']))
{ 
    if (isset($_POST['id_user'], $_POST['nama_siswa'], $_POST['alamat'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['asal_sekolah']))
    {
        $id = $_POST['id_user']; 
        $nama = $_POST['nama_siswa'];
        $alamat = $_POST['alamat']; 
        $jk = $_POST['jenis_kelamin']; 
        $agama = $_POST['agama']; 
        $sekolah = $_POST['asal_sekolah']; 

        $stmt = $db->prepare("UPDATE tbl_siswa SET nama_siswa=?, alamat=?, jenis_kelamin=?, agama=?, asal_sekolah=? WHERE id_user=?");
        $stmt->bind_param("sssssi", $nama, $alamat, $jk, $agama, $sekolah, $id);

        if ($stmt->execute())
        { 
            header('Location: list-siswa.php'); 
        } 
        else
        { 
            die("Gagal menyimpan perubahan..."); 
        } 

        $stmt->close();
    }
    else
    {
        die("Data tidak lengkap.");
    }
}
else
{ 
    die("Akses dilarang..."); 
} 
?>
