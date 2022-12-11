<?php 	
include('koneksi.php');
$db = new abyy();
$id = $_GET['id'];
if(! is_null($id))
{
	$siswa = $db->get_by_id($id);
}
else
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Edit Data Siswa</title>
</head>
<body>
<h1>Edit Data Siswa</h1>
<hr/>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $siswa['id']; ?>"/>
<table>
	<tr>
		<td>ID :</td>
		<td><input type="text" name="id" value="<?php echo $siswa['id']; ?>"/></td>
	</tr>
	<tr>
		<td>NISN :</td>
		<td><input type="text" name="nisn" value="<?php echo $siswa['nisn']; ?>"/></td>
	</tr>
	<tr>
		<td>NAMA :</td>
		<td><input type="text" name="nama" value="<?php echo $siswa['nama']; ?>"/></td>
	</tr>
	<tr>
		<td>KELAS :</td>
		<td><input type="text" name="kelas" value="<?php echo $siswa['kelas']; ?>"/></td>
	</tr>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>