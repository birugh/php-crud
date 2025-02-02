<?php
include ("config.php");

if(isset($_POST['btnSubmit']))
{
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $agama = $_POST['agama'];
    $asalSekolah = $_POST['asalSekolah'];

    $query = "INSERT INTO tbl_siswa (nama_siswa, alamat, jenis_kelamin, agama, asal_sekolah) 
              VALUE ('$nama', '$alamat', '$jenisKelamin', '$agama', '$asalSekolah')";
    $sql = mysqli_query($db, $query);

    if ($sql)
    {
        header('Location: index.php?status=berhasil');
    }
    else
    {
        header('Location: index.php?status=gagal');
    }
}
else
{
    die("Akses dilarang");
}
?>