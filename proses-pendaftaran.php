<?php
include("config.php");

if (isset($_POST['btnSubmit']))
{
    if (isset($_POST['nama'], $_POST['alamat'], $_POST['jenisKelamin'], $_POST['agama'], $_POST['asalSekolah']))
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $agama = $_POST['agama'];
        $asalSekolah = $_POST['asalSekolah'];

        $stmt = $db->prepare("INSERT INTO tbl_siswa (nama_siswa, alamat, jenis_kelamin, agama, asal_sekolah) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $alamat, $jenisKelamin, $agama, $asalSekolah);

        if ($stmt->execute())
        {
            header('Location: index.php?status=berhasil');
        }
        else
        {
            header('Location: index.php?status=gagal');
        }

        $stmt->close();
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
