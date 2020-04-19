<?php 
include'../koneksi.php';
$id_buku = $_GET['id_buku'];

 $query=mysqli_query($kon,"DELETE FROM buku WHERE id_buku='$id_buku'");
var_dump($query);
 echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";


 ?>