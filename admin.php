<!DOCTYPE html>
<html>
<?php
include "koneksi.php";

?>
<head>
	<title>admin</title>
</head>
<body bgcolor="(#9600FF)">
	<p>Selamat Datang Di Halaman pendaftaran|SMK Luqman AL Hakim</p>
	<hr>
	<a href="admin.php">tambah admin</a>|
	<a href="pendaftaran.php">tambah pendaftaran</a>|
	<a href="index.php">logout</a>
	<hr>
<center><h1>Data Admin</h1>
<br>
<a href="tambah_admin.php">+ TAMBAH EVENT</a>
<br>
<table border="1" align="center">
	<tr align="center">
		<td>id</td>
		<td>nama event</td>
		<td>tanggal event</td>
		<td>informasi event</td>
		<td>opsi</td>
	</tr>
	<?php
	$tampil=mysqli_query($mysqli,"select * from admin");
	$no=1;
	while ($hasil=mysqli_fetch_array($tampil)){
		?>
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $hasil['nama'];?></td>
			<td><?php echo $hasil['tanggal'];?></td>
			<td><?php echo $hasil['informasi'];?></td>
			<td>
				<a href="edit_admin.php?id=<?php echo $hasil['id'];?>">edit</a>|
				<a href="hapus_admin.php?hapus&id=<?=$hasil['id'];?>">hapus</a>
			</td>
		</tr>
		<?php
	}
	?>
</table>
<br>
<hr>
<div>copyright &copy; 2023|SMK Luqman AL Hakim </div>
</body>
</html>