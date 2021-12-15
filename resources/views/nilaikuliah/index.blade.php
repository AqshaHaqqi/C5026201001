@extends('layout.ceria')

@section('isikonten')

	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data Nilai</a>

	<br/>
	<br/>
    <div class = "container">
        <p class="mt-2 fw-bold"> Cari Nilai </p>
    <form action="/nilaikuliah/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Nilai .." value="{{ old('cari') }}">
        <input class ="btn btn-outline-primary btn-sm mb-1" type="submit" value="CARI">
    </form>
    </div>
    <br>
	<table class="table table-striped table-hover table-bordered align-middle" >
		<tr>
            <th>ID</th>
            <th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $n->ID}}</td>
			<td>{{ $n->NRP}}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                <?php
                    if($n->NilaiAngka <=40){
                        echo "D";
                    } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                        echo "C";
                    } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                        echo "B";
                    } else{
                        echo "A";
                    }
                    ?>
            </td>
            <td>
                <?php
                    $bobot = $n->NilaiAngka * $n->SKS;
                    echo $bobot;
                    ?>
            </td>

		</tr>
		@endforeach
	</table>
    {{$nilaikuliah ->links()}}
@endsection
