<html>
<head>
	<title>Home</title>
</head>

<body>
	<h1><center>MEMBUAT CRUD DI FRAMEWORK CI-3</center></h1>
	<h2><center>Riski Amalia Rahmawati (A020042)</center></h2>
	<h3><center>Tugas II Workshop R&D AKMET</center></h3>
	<h4>DATA MAHASISWA UNIVERSITAS AIRLANGGA</h4>

<button onclick="document.location.href='<?php echo base_url('Welcome/formInput') ?>' ">Tambah Mahasiswa</button>

	<table>
		<tr>
			<td><b>No</b></td>
			<td><b>NIM</b></td>
			<td><b>Nama Mahasiswa</b></td>
			<td><b>Jurusan</b></td>
			<td><b>Aksi</b></td>
		</tr>
		<?php
			$count = 0;
			foreach($tb_mahasiswa as $row){
				$count = $count + 1;
		?>

		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->nim ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->jurusan ?></td>
			<td><a href="<?php echo base_url('Welcome/formEdit/'). $row->nim  ?>">Edit</a> <a href="<?php echo base_url('Welcome/AksiDeleteData/'). $row->nim ?>">Delete</a></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>