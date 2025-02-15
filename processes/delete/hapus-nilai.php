<?php
include("../../config/config.php");

if (isset($_GET['id_nilai'])) {
    $id_nilai = $_GET['id_nilai'];

    $sql = "DELETE FROM tbl_mapel WHERE id_nilai=$id_nilai";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../../lists/list-nilai.php?status=berhasil');
    } else {
        header('Location: ../../lists/list-nilai.php?status=gagal');
    }
} else {
    die("akses dilarang...");
}
?>