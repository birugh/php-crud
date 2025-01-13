<?php
include ("config.php");

if(isset($_POST['btnSubmit']))
{
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asalSekolah = $_POST['asal_sekolah'];

    $query = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, asal_sekolah) 
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