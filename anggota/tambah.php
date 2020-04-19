<?php 
include '../koneksi.php';
include '../aset/header.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Data</title>
 </head>
 <body>
<center>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
		<center>
		<div class="card" style="width: 100%">
  			<div class="card-header" style="width: 100%">
   				<h2 class="card-title"><i class="far fa-edit"></i>Tambah Anggota</h2>
    		</div>
    		<div class="card-body">
    		<form action="proses-tambah.php" method="post">
    		<table class="table">
 				<tr>
 					<td>Nama</td>
 					<td><input type="text" name="nama"></td>
 				</tr>
 				<tr>
 					<td>Kelas</td>
 					<td><input type="text" name="kelas"></td>
 				</tr>
 				<tr>
 					<td>Telp</td>
 					<td><input type="text" name="telp"></td>
 				</tr>
 				<tr>
 					<td>Username</td>
 					<td><input type="text" name="username"></td>
 				</tr>
 				<tr>
 					<td>Password</td>
 					<td><input type="password" name="password"></td>
 				</tr>
 				<tr>
 					<th></th>
 					<th><input type="submit" class="btn btn-primary" name="simpan"></th>
 				</tr>
 			</table>
 			</form>
 			</div>
 		</div>
 		</center>
 	</div>
 </div>
 
 </body>
 </html>
 <?php 
include '../aset/footer.php';
  ?>