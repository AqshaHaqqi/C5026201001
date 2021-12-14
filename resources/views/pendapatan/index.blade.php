@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Pendapatan</h3>

    <a href="/pendapatan/tambah" class="btn btn-primary" > + Tambah Pendapatan Baru</a>
	<br/>
    <br/>

    <div class = "container mb-1">
        <p class="fw-bold"> Cari Pendapatan </p>
    <form action="/pendapatan/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pendapatan .." value="{{ old('cari') }}">
        <input class ="btn btn-success btn-sm mb-1" type="submit" value="Cari">
    </form>
    </div>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pendapatan_bulan }}</td>
			<td>{{ $p->pendapatan_tahun }}</td>
			<td>{{ $p->pendapatan_gaji }}</td>
            <td>{{ $p->pendapatan_tunjangan }}</td>
			<td>
                <a href="/pendapatan/detail/{{ $p->pendapatan_id }}" class="btn btn-primary">Detail</a>
                |
				<a href="/pendapatan/edit/{{ $p->pendapatan_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->pendapatan_id}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$pendapatan -> links()}}

@endsection
