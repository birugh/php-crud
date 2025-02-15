<?php
include("config.php");

if (isset($_GET['nisn_siswa']))
{
    $id = $_GET['nisn_siswa'];

    $stmt = $db->prepare("DELETE FROM tbl_siswa WHERE nisn_siswa = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute())
    {
        header('Location: list-siswa.php');
    }
    else
    {
        die("Gagal Menghapus, Silahkan Coba Lagi!");
    }

    $stmt->close();
}
else
{
    die("Akses dilarang.");
}
?>
