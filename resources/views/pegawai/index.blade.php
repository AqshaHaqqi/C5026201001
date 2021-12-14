@extends('layout.ceria')

@section('isikonten')

	<h2><a href="https://www.malasngoding.com"></a></h2>
	<h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary" > + Tambah Pegawai Baru</a>
	<br/>
    <br/>
    <div class = "container mb-1">
        <p class="fw-bold"> Cari Nama Pegawai </p>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input class ="btn btn-success btn-sm mb-1" type="submit" value="Cari">
    </form>
    </div>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-primary">Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>

			</td>
		</tr>
		@endforeach
	</table>
    {{$pegawai->links()}}
@endsection
