@extends('layout.ceria')

@section('isikonten')

	<h3 class="mt-2">Detail Data Kursi</h3>

	<a href="/kursi"> Kembali</a>

	@foreach($kursi as $k)
        <div class="form-group row w-50">
            <label for="inputnama" class="col-sm-4 col-form-label">Kode Kursi :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $k->kodekursi }}
            </div>

            <label for="inputjab" class="col-sm-4 col-form-label">Merk Kursi :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $k->merkkursi }}
            </div>

            <label for="inputumur" class="col-sm-4 col-form-label">Stok Kursi :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $k->stockkursi }}
            </div>

            <label for="inputalamat" class="col-sm-4 col-form-label"> Tersedia :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $k->tersedia }}</label>
            </div>
        </div>
	@endforeach
@endsection
