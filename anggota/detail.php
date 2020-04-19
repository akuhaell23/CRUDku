<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$sql = "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota = '$id_anggota'";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Anggota</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td width="100px"><strong>Nama</strong></td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Kelas</strong></td>
						<td width="500px"><?= $detail['kelas'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Telp</strong></td>
						<td width="500px"><?= $detail['telp'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Username</strong></td>
						<td width="500px"><?= $detail['username'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Password</strong></td>
						<td width="500px"><?= $detail['password'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Level</strong></td>
						<td width="500px"><?= $detail['level'] ?></td>
					</tr>
					<tr>
						<td>
							<a href="edit.php?id_anggota=<?php echo $detail['id_anggota']; ?>" class="badge badge-warning">Edit</a>
						</td>
						<td>
    						<a href="hapus.php?id_anggota=<?php echo $detail['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
    					</td>	
					</tr>
				</table>
				</th></tr></table>
				</center>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>