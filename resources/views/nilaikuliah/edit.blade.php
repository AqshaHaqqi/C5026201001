@extends('layout.ceria')

@section('isikonten')

	<h3 class="mt-2">Edit Data nilai</h3>

	<a href="/nilai"> Kembali</a>

	@foreach($nilaikuliah as $n)
	<form action="/nilai/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row w-75">
            <label for="inputnilai" class="col-form-label">ID :</label>
            <div class="mx mt-2">
              <input type="number" class="form-control" name="id" value="{{ $k->nilaikuliah }}"id="inputnilai"required="required">
            </div>

            <label for="inputnrp" class="col-sm-4 col-form-label">NRP :</label>
            <div class="mx mt-2">
              <input type="text" class="form-control" name="nrp" value="{{ $k->nilaikuliah }}"id="inputnrp"required="required">
            </div>

            <label for="inputnilaiangka" class="col-sm-4 col-form-label">Nilai Angka :</label>
            <div class="mx mt-2">
              <input type="number" class="form-control" name="nilaiangka" value="{{ $k->nilaikuliah }}" id="inputnilaiangka" required="required">
            </div>

            <label for="inputsks" class="col-sm-4 col-form-label">SKS :</label>
            <div class="mx mt-2">
              <input type="number" class="form-control" name="sks" value="{{ $k->nilaikuliah }}" id="inputsks" required="required">
            </div>

            <div class="text-center">
                <input type="submit" class ="btn btn-success"value="Simpan Data">
            </div>
        </div>
	</form>
	@endforeach
@endsection
