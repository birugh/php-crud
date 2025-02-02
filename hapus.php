<?php
include("config.php");

if (isset($_GET['id_user']))
{
    $id = $_GET['id_user'];

    $stmt = $db->prepare("DELETE FROM tbl_siswa WHERE id_user = ?");
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
