<?php
include("config.php");

if (isset($_POST['btnSubmit'])) {
    if (isset($_POST['nisn_user'], $_POST['nilai_mtk'], $_POST['nilai_pjok'], $_POST['nilai_pabp'], $_POST['nilai_web'])) {
        $nisn = $_POST['nisn_user'];
        $nilai_mtk = $_POST['nilai_mtk'];
        $nilai_pjok = $_POST['nilai_pjok'];
        $nilai_pabp = $_POST['nilai_pabp'];
        $nilai_web = $_POST['nilai_web'];

        $stmt = $db->prepare("INSERT INTO tbl_mapel (nisn, nilai_mtk, nilai_pjok, nilai_pabp, nilai_web) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiii", $nisn, $nilai_mtk, $nilai_pjok, $nilai_pabp, $nilai_web);

        if ($stmt->execute()) {
            header('Location: list-nilai.php?status=berhasil');
        } else {
            header('Location: index.php?status=gagal');
        }

        $stmt->close();
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang");
}
?>