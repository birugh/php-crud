<?php 
include("config.php"); 
 
if(isset($_GET['id']))
{ 
    $id = $_GET['id']; 
 
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
