<?php
include("config.php");

if (isset($_POST['btnSubmit'])) {
    if (isset($_POST['nama'], $_POST['alamat'], $_POST['jenis_kelamin'], $_POST['agama'], $_POST['sekolah_asal'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenisKelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $asalSekolah = $_POST['sekolah_asal'];

        $stmt = $db->prepare("INSERT INTO tbl_siswa (nama_siswa, alamat, jenis_kelamin, agama, asal_sekolah) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $alamat, $jenisKelamin, $agama, $asalSekolah);

        if ($stmt->execute()) {
            header('Location: list-siswa.php?status=berhasil');
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