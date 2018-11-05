<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td><input type="checkbox" name="film" value="horror">Horror</td>
		<td><input type="checkbox" name="film" value="action">Action</td>
		<td><input type="checkbox" name="film" value="anime">Anime</td>
		<td><input type="checkbox" name="film" value="thriller">Thriller</td>
		<td><input type="checkbox" name="film" value="animasi">Animasi</td>
	</tr>
	<tr>
		<td>Travelling</td>
		<td><input type="checkbox" name="travelling" value="Bali">Bali</td>
		<td><input type="checkbox" name="travelling" value="Raja Ampat">Raja Ampat</td>
		<td><input type="checkbox" name="travelling" value="Pulau Derawan">Pulau Derawan</td>
		<td><input type="checkbox" name="travelling" value="Bangka Belitung">Bangka Belitung</td>
		<td><input type="checkbox" name="travelling" value="Labuan Bajo">Labuan Bajo</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
