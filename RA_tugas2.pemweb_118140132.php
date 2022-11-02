<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Task 2 Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="task2.css">
</head>
<body>
	<div class="container">
	<div class="header">
		<h1 class="judul">Product</h1>
	</div>
	<div class="image"></div>
	<div class="form">
		<form action="informasi produk.html" method="GET" id="name-form">
		<table>
			<tr>
				<td>Nama Produk</td>
				<td>:</td>
				<td><input type="text" name="produk"></td><br>
			</tr>
			<tr>
				<td>Jumlah Produk </td>
				<td>:</td>
				<td><input type="text" name="jumlah"></td><br>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><textarea rows="4" name="deskripsi"></textarea></td>
			</tr>
		</table>
			<button type="submit" form="name-form" value="submit">Submit</button>
			<button type="reset" value="reset">Reset</button>
		
		</form>
	</div>
	</div>
</body>
</html>