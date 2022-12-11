<?php 	
include('koneksi.php');
$db = new abyy();
$siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>

	<title>TUGAS CRUD</title>
	
</head>

<body>

<h3 calss ="text" align= "center"style="color : black">CRUD - PHP OOP</h3>

</br>
</br>

<table border="1"align=center>
		<tr>
			<th>NO</th>
			<th>NISN</th>
			<th>NAMA</th>
			<th>KELAS</th>
			<th>ACTION</th>
		</tr>

		<?php 
		$no = 1;
		foreach($siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['nisn']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">UBAH</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<a href="tambah_data.php" role="button">Tambah data</a>
</body>
</body>
</html>