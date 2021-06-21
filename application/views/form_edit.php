<html>
<head>
	<title>Data Editing Page</title>
</head>

<body>
	<h3>Form Edit Data</h3>

	<table>
		<form action="<?php echo base_url('Welcome/AksiEdit') ?>" method="post">
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td>
				<input type="text" value="<?php echo $data_mhs->nim ?>" disabled> <!-- Untuk Menampilkan Data -->
				<input type="hidden" name="nim" value="<?php echo $data_mhs->nim ?>"> <!-- Untuk Menampung Dana NIM (PK DATABASE) -->
			</td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>JURUSAN</td>
			<td>:</td>
			<td><input type="text" name="jurusan"></td>
		</tr>
		<tr>
			<td colspan="3"><center><input type="submit" value="SIMPAN"></center></td>
		</tr>
	</table>

</body>
</html>