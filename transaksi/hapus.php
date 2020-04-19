<?php 
include '../koneksi.php';
$id=$_GET["id_pinjam"];
$query=mysqli_query($kon,"DELETE FROM detail_pinjam where id_pinjam='$id'");
$query=mysqli_query($kon,"DELETE FROM peminjaman where id_pinjam='$id'");
if(isset($query)){
    header("location : index.php");
    echo "<script>alert('data barhasil dihapus. ');window.location='index.php';</script>";
    exit;
}
else{
    header("location : index.php");
    exit;
}
?>