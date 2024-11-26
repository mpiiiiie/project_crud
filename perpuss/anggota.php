<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman anggota</title>
</head>
<body>
    <h2>SELAMAT DATANG ANGGOTA</h2>
    <P>yeyyyyyyyyy kamu udah login</p>

    <h2>CRUD DATA ANGGOTA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>id</th>
			<th>nama buku</th>
			<th>kode buku</th>
            <th>genre</th>
			<th>opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
	
		$data = mysqli_query($koneksi,"select * from peminjaman");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_buku']; ?></td>
				<td><?php echo $d['kode_buku']; ?></td>
                <td><?php echo $d['genre']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php 
		    }
		?>

</table>
</body>
</html>