<?php
include("config.php");

if (isset($_POST['btnSubmit'])) {
    if (isset($_POST['id_nilai'], $_POST['nisn_siswa'], $_POST['nilai_mtk'], $_POST['nilai_pjok'], $_POST['nilai_pabp'], $_POST['nilai_web'])) {
        $id_nilai = $_POST['id_nilai'];
        $nisn_siswa = $_POST['nisn_siswa'];
        $nilai_mtk = $_POST['nilai_mtk'];
        $nilai_pjok = $_POST['nilai_pjok'];
        $nilai_pabp = $_POST['nilai_pabp'];
        $nilai_web = $_POST['nilai_web'];

        if ($nilai_mtk < 0 || $nilai_mtk > 100 || $nilai_pjok < 0 || $nilai_pjok > 100 || $nilai_pabp < 0 || $nilai_pabp > 100 || $nilai_web < 0 || $nilai_web > 100) {
            header('Location: form-edit-nilai.php?id=' . $id_nilai . '&status=invalid');
            exit();
        }

        $stmt = $db->prepare("UPDATE tbl_mapel SET nisn_siswa = ?, nilai_mtk = ?, nilai_pjok = ?, nilai_pabp = ?, nilai_web = ? WHERE id_nilai = ?");
        $stmt->bind_param("iiiiii", $nisn_siswa, $nilai_mtk, $nilai_pjok, $nilai_pabp, $nilai_web, $id_nilai);

        if ($stmt->execute()) {
            header('Location: list-nilai.php?status=berhasil');
        } else {
            header('Location: list-nilai.php?status=gagal');
        }

        $stmt->close();
    } else {
        header('Location: list-nilai.php?status=gagal');
    }
} else {
    die("Akses dilarang");
}
?>