<!DOCTYPE html>
<html>
<head>
	<title>tambah admin</title>
</head>
<body bgcolor="cyan" style="color: white">
	<form action="tambah_admin.php" method="POST">
	<p>Selamat Datang Di Halaman Admin|SMK Luqman AL Hakim</p>
	<hr>
	<fieldset>
		<legend>admin</legend>
		<table>
			<tr>
				<td>nama event</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="masukkan nama anda..." required></td>
				</tr><tr>
					<td>tanggal event</td>
					<td>:</td>
					<td><input type="date" name="tanggal" required></td>
				</tr><tr>
					<td>informasi event</td>
					<td>:</td>
					<td><textarea name="informasi" placeholder="masukkan informasi anda..." required></textarea></td>
				</tr><tr>
					<td><input type="submit" name="tambah"></td>
				</tr>
		</table>
	</fieldset>
		<br>
		<hr>
		<div>copyrihgt &copy; 2023|SMK Luqman AL Hakim</div>
	</form>
</body>
</html>