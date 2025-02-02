<?php 
include("config.php"); 
 
if(isset($_GET['id_siswa']))
{ 
    $id = $_GET['id_siswa']; 
 
    $sql = "DELETE FROM tbl_siswa WHERE id=$id"; 
    $query = mysqli_query($db, $sql); 
 
    if($query)
    { 
        header('Location: list-siswa.php'); 
    }
    else
    { 
        die("Gagal Menghapus, Silahkan Coba Lagi!"); 
    }  
} 
else 
{ 
    die("Akses dilarang."); 
} 
?>
