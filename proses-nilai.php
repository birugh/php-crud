<?php
include("config.php");

if (isset($_POST['btnSubmit'])) {
    if (isset($_POST['nisn_siswa'], $_POST['nilai_mtk'], $_POST['nilai_pjok'], $_POST['nilai_pabp'], $_POST['nilai_web'])) {
        $nisn = $_POST['nisn_siswa'];
        $nilai_mtk = $_POST['nilai_mtk'];
        $nilai_pjok = $_POST['nilai_pjok'];
        $nilai_pabp = $_POST['nilai_pabp'];
        $nilai_web = $_POST['nilai_web'];

        if ($nilai_mtk < 0 || $nilai_mtk > 100 || $nilai_pjok < 0 || $nilai_pjok > 100 || $nilai_pabp < 0 || $nilai_pabp > 100 || $nilai_web < 0 || $nilai_web > 100) {
            header('Location: form-nilai.php?status=invalid');
            exit();
        }

        $stmt = $db->prepare("INSERT INTO tbl_mapel (nisn_siswa, nilai_mtk, nilai_pjok, nilai_pabp, nilai_web) VALUES (?, ?, ?, ?, ?)");
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