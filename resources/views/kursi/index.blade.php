@extends('layout.ceria')

@section('isikonten')

	<h3>Data Kursi</h3>

	<a href="/kursi/tambah" class="btn btn-primary"> + Tambah Data Kursi</a>

	<br/>
	<br/>
    <div class = "container">
        <p class="mt-2 fw-bold"> Cari Kursi </p>
    <form action="/kursi/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Merk .." value="{{ old('cari') }}">
        <input class ="btn btn-outline-primary btn-sm mb-1" type="submit" value="CARI">
    </form>
    </div>
    <br>
	<table class="table table-striped table-hover table-bordered align-middle" >
		<tr>
            <th>No</th>
            <th>Kode Kursi</th>
			<th>Merk Kursi</th>
			<th>Stok Kursi</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($kursi as $k)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->kodekursi}}</td>
			<td>{{ $k->merkkursi}}</td>
			<td>{{ $k->stockkursi }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>
                <div class="mb-2 mt-2">
                <a class="btn btn-primary mb-2"href="/kursi/detail/{{ $k->kodekursi }}">Detail</a>
                |
				<a class="btn btn-warning mb-2"href="/kursi/edit/{{ $k->kodekursi }}">Edit</a>
				|
				<a class="btn btn-danger mb-2"href="/kursi/hapus/{{ $k->kodekursi }}">Hapus</a>
            </div>
			</td>
		</tr>
		@endforeach
	</table>
    <div style="">
        <h6>Keterangan</h6>
        <p>Y = Tersedia</p>
        <p>N = Tidak Tersedia</p>
    </div>
    {{$kursi ->links()}}
@endsection
