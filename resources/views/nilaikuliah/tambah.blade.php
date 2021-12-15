@extends('layout.ceria')

@section('isikonten')

	<h3>Tambah Data Nilai</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
		ID : <input type="text" name="id" required="required"> <br/>
		NRP : <input type="text" name="nrp" required="required"> <br/>
		Nilai Angka : <input type="number" name="nilaiangka" required="required"> <br/>
		SKS : <input type="number" name="sks" required="required"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
