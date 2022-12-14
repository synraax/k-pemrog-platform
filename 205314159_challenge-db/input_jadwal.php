<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>205314159 - Input Jadwal</title>

	<style>
	td {
		padding: 5px;
	}
	</style>
</head>

<body>
	<h1>Input Jadwal Kuliah</h1>
	<a href="lihat_jadwal.php">| Lihat Jadwal Kuliah |</a>

	<br> <br>

	<form action="query.php" method="POST">
		<table>
			<tr>
				<td>Kode Matakuliah</td>
				<td><input type="text" name="kodeMatkul"></td>
			</tr>
			<tr>
				<td>Nama Matakuliah</td>
				<td><input type="text" name="namaMatkul"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<select name="kelas">
						<?php
						for ($i = 'A'; $i != 'AA'; $i++) {
							echo "<option value='$i'>$i</option>";
						}
						?>
					</select>
					<input type="checkbox" name="praktikum">
					<label for="praktikum">Praktikum?</label>
				</td>
			</tr>
			<tr>
				<td>Pengampu</td>
				<td><input type="text" name="pengampu"></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td>
					<select name="hari">
						<option value="Senin">Senin</option>
						<option value="Selasa">Selasa</option>
						<option value="Rabu">Rabu</option>
						<option value="Kamis">Kamis</option>
						<option value="Jumat">Jumat</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jam Mulai - Jam Berakhir</td>
				<td>
					<input type="text" name="jamStart">
					<input type="text" name="jamEnd">
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<input type="submit" name="button" value="Simpan">
				</td>
			</tr>
		</table>
	</form>

</body>

</html>