<?php 
include("../config/config.php"); 

if (isset($_POST['btnSubmit']))
{ 
    if (isset($_POST['nisn_siswa'], $_POST['nama_siswa'], $_POST['alamat'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['asal_sekolah']))
    {
        $id = $_POST['nisn_siswa']; 
        $nama = $_POST['nama_siswa'];
        $alamat = $_POST['alamat']; 
        $jk = $_POST['jenis_kelamin']; 
        $agama = $_POST['agama']; 
        $sekolah = $_POST['asal_sekolah']; 

        $stmt = $db->prepare("UPDATE tbl_siswa SET nama_siswa=?, alamat=?, jenis_kelamin=?, agama=?, asal_sekolah=? WHERE nisn_siswa=?");
        $stmt->bind_param("sssssi", $nama, $alamat, $jk, $agama, $sekolah, $id);

        if ($stmt->execute())
        { 
            header('Location: ../lists/list-siswa.php'); 
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
