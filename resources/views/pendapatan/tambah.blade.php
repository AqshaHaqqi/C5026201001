<!DOCTYPE html>
<html>
<head>
	<title>Pendapatan</title>
</head>
<body>

	<h3>Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai"> <br/>
		Bulan <input type="text" name="Bulan"> <br/>
		Tahun <input type="number" name="Tahun"> <br/>
		Gaji <input type="number" name="Gaji"> <br/>
        Tunjangan <input type="number" name="Tunjangan"> <br/>
		<input type="submit" value="Simpan Data">
	</form>



</body>
</html>
