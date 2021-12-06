@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai : <input type="number" name="idpegawai" required="required"> <br/>
		Bulan : <input type="number" name="bulan" required="required"> <br/>
		Tahun : <input type="number" name="tahun" required="required"> <br/>
		Gaji : <input type="number" name="gaji" required="required"> <br/>
        Tunjangan : <input type="number" name="tunjangan" required="required"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
