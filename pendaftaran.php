<!DOCTYPE html>
<html>
<?php
include "koneksi.php";

?>
<head>
	<title>pendaftaran</title>
</head>
<body>
	<form action="tambah_pendaftaran.php" method="POST">
	<p>Selamat Datang Di Halaman pendaftaran|SMK Luqman AL Hakim</p>
	<hr>
	<a href="admin.php">tampilan admin</a>|
	<a href="pendaftaran.php">tampilan pendaftaran</a>|
	<a href="index.php">logout</a>
	<hr>
<center><h1>data pendaftaran</h1></center>
<br>
<table border="1" align="center">
	<tr>
		<td>id</td>
		<td>nama</td>
		<td>email</td>
		<td>tanggal lahir</td>
		<td>alamat</td>
	</tr>
	<?php
	$tampil=mysqli_query($mysqli,"select * from pendaftaran");
	$no=1;
	while($hasil=mysqli_fetch_array($tampil)){

		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $hasil['nama'];?></td>
			<td><?php echo $hasil['email'];?></td>
			<td><?php echo $hasil['tanggal_lahir'];?></td>
			<td><?php echo $hasil['alamat'];?></td>
		</tr>
		<?php
	}
	?>
</table>
<br>
<hr>
<div>copyright &copy; 2023|SMK Luqman AL Hakim</div>
</form>
</body>
</html>