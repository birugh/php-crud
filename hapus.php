<?php 
include("config.php"); 
 
if(isset($_GET['id_user']))
{ 
    $id = $_GET['id_user']; 
 
    $sql = "DELETE FROM tbl_siswa WHERE id_user=$id"; 
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
