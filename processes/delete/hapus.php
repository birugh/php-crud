<?php
include("../../config/config.php");

if (isset($_GET['nisn_siswa'])) {
    $nisn_siswa = $_GET['nisn_siswa'];

    $sql = "DELETE FROM tbl_siswa WHERE nisn_siswa=$nisn_siswa";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../../lists/list-siswa.php?status=berhasil');
    } else {
        header('Location: ../../lists/list-siswa.php?status=gagal');
    }
} else {
    die("akses dilarang...");
}
?>