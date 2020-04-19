<?php 

include '../koneksi.php';
include '../aset/header.php';
$id_anggota = $_GET["id_anggota"];

$sql = "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota = '$id_anggota'";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
 ?>

 <div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width: 100%;">
					<h2 class="card-title"><i class="fas fas fa-book"> </i> Edit Data Anggota</h2>
				</div>
				<div class="card-body">
				<form action="proses-edit.php" method="post">
				<table class="table">
					<input type="hidden" name="id_anggota" value="<?= $detail['id_anggota']; ?>">
					<tr>
						<td>Nama</td>
						<td><input style="width:100%" type="text" name="nama" value="<?= $detail['nama'] ?>" required></td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td><input style="width:100%" type="text" name="kelas" value="<?= $detail['kelas'] ?>" required></td>
					</tr>
					<tr>
						<td>Telp</td>
						<td><input style="width:100%" type="number" name="telp" value="<?= $detail['telp'] ?>" required></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input style="width:100%" type="text" name="username" value="<?= $detail['username'] ?>" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input style="width:100%" type="password" name="password" value="<?= $detail['password'] ?>" required></td>
					</tr>
					<tr>
						<td>Level</td>
						<td><input style="width:100%" type="text" name="level" value="<?= $detail['level'] ?>" required></td>
					</tr>
					<tr>
						<th></th>
						<th><button style="width:100%; height:70px" type="submit" class="btn btn-primary" name="simpan">Edit</button></th>
					</tr>
				</table>
				</form>
				</div>
	    	</div>
			</center>
		</div>
	</div>
</div>

<?php 
include '../aset/footer.php';
 ?>