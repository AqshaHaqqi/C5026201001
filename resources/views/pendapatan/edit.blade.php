@extends('layout.ceria')

@section('title', 'EDIT PENDAPATAN')

@section('isikonten')

<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Edit Pendapatan</h3>

    <a href="/pendapatan"> Kembali</a>
	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pendapatan_id }}"> <br/>
		IDPegawai : <input type="number" required="required" name="idpegawai" value="{{ $p->pendapatan_idpegawai }}"> <br/>
		Bulan : <input type="number" required="required" name="bulan" value="{{ $p->pendapatan_bulan }}"> <br/>
		Tahun : <input type="number" required="required" name="tahun" value="{{ $p->pendapatan_tahun }}"> <br/>
		Gaji : <input type="number" required="required" name="gaji" value="{{ $p->pendapatan_gaji }}"> <br/>
		Tunjangan : <input type="number" required="required" name="tunjangan" value="{{ $p->pendapatan_tunjangan }}"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection
