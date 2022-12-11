<!DOCTYPE html>
<html>
<head>

<title>Tambah Data</title>

</head>


<body>

<h1>Tambah Data Siswa</h1>

<hr/>

<form method="post" action="proses.php?action=add">

	<table>
		
			<tr>
				<td>ID :</td>
				<td><input type="text" name="id"/></td>
			</tr>
			<tr>
				<td>NISN :</td>
				<td><input type="text" name="nisn"/></td>
			</tr>
			
			<tr>
				<td>NAMA :</td>
				<td><input type="text" name="nama"/></td>
			</tr>
			
			<tr>
				<td>KELAS  :</td>
				<td><input type="text" name="kelas"/></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="tombol" value="Simpan"/></td>
			</tr>

	</table>

</form>

</body>
</html>