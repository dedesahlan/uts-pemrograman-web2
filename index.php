<!DOCTYPE html>
<html>
<head>
	<title> UTS </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form class="form-style-4" action="db.php" method="post">
			<tr>
				<td>
					<select name="wilayah">
					<option value="Wilayah">wilayah</option>
					<option value="DKI Jakarta">DKI Jakarta</option>
					<option value="Jawa Barat">Jawa Barat</option>
					<option value="BANTEN">BANTEN</option>
					<option value="Jawa Tengah">Jawa Tengah</option>
					</select>
				</td>
			</tr>
		
			<tr>
				<td><label>Jumlah Positif</label></td>
				<td><input type="text" name="jmlpositif"></td>
			</tr>

			<tr>
				<td><label>Jumlah Dirawat</label></td>
				<td><input type="text" name="jmldirawat"></td>
			</tr>
			<tr>
				<td><label>Jumlah Sembuh</label></td>
				<td><input type="text" name="jmlsembuh"></td>
			</tr>
			<tr>
				<td><label>Jumlah Meninggal</label></td>
				<td><input type="text" name="jmlmeninggal"></td>
			</tr>
			<tr>
				<td><label>Nama Operator</label></td>
				<td><input type="text" name="nmoperator"></td>
			</tr>
			
			<tr>
				<td><label>NIM</label></td>
				<td><input type="text" name="nim_mahasiswa"></td>
			</tr><br>

			<tr>
				<td>
					<input type="submit" name="tambah" value="SUBMIT" class="btn">
				</td>
			</tr>
</form>
</body>
</html>