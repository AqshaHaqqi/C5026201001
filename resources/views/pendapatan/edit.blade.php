<!DOCTYPE html>
<html>
<head>
	<title>Pendapatan</title>
</head>
<body>

	<h3>Edit Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pendapatan_id }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Bulan <input type="text" required="required" name="bulan" value="{{ $p->Bulan }}"> <br/>
		Tahun <input type="number" required="required" name="tahun" value="{{ $p->Tahun }}"> <br/>
		Gaji <input type="number" required="required" name="gaji">{{ $p->Gaji }} <br/>
        Tunjangan <input type="number" required="required" name="tunjangan">{{ $p->Tunjangan }} <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>
