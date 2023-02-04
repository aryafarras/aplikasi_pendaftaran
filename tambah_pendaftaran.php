<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran</title>
</head>
<body>

	<form action="proses_tambah_pendaftaran.php" method="POST">
	<P>Selamat Datang Di Halaman Pendaftaran|SMK LUQMAN AL HAKIM</P>
	<fieldset>
		<legend>pendaftaran</legend>
		<table>
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="masukkan nama anda..." required></td>
			</tr><tr>
				<td>email</td>
				<td>:</td>
				<td><input type="email" name="email" placeholder="masukkan email anda..." required></td>
			</tr><tr>
				<td>tangal lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" required></td>
			</tr><tr>
				<td>alamat</td>
				<td>:</td>
				<td><textarea name="alamat" required></textarea></td>
			</tr><tr>
				<td><input type="submit" value="daftar"></td>
			</tr>
		</table>
		<br>
		<hr>
		<div>copyrihgt &copy; 2023|SMK LUQMAN AL HAKIM</div>
	</fieldset>
</body>
</html>