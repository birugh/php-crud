<?php
include("config.php");

if (isset($_GET['id_nilai'])) {
    $id = $_GET['id_nilai'];

    $stmt = $db->prepare("DELETE FROM tbl_mapel WHERE id_nilai = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: list-nilai.php?status=berhasil');
    } else {
        header('Location: list-nilai.php?status=gagal');
    }

    $stmt->close();
} else {
    die("Akses dilarang");
}
?>