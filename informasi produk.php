<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Informasi Produk</title>
	<link rel="stylesheet" type="text/css" href="task2.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Detail Informasi Produk</h1>
		</div>

		<div class="table">
			<table>
				<tr>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Deskripasi</th>
				</tr>
				<tr>
					<td>
						<?php
						$name_produk = $_GET['produk']
						echo $name_produk;
					?>
					</td>
					<td>
						<?php
						$jumlah_produk = $_GET['jumlah']
						echo $jumlah_produk;
					?>
					</td>
					<td>
						<?php
						$desk_produk = $_GET['deskripsi']
						echo $desk_produk;
					?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>