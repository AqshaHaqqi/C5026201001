@extends('layout.ceria')

@section('isikonten')

	<h3 class="mt-2">Edit Data Kursi</h3>

	<a href="/kursi"> Kembali</a>

	@foreach($kursi as $k)
	<form action="/kursi/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row w-75">
            <label for="inputkode" class="col-form-label">Kode Kursi :</label>
            <div class="mx mt-2">
              <input type="number" class="form-control" name="id" value="{{ $k->kodekursi }}"id="inputkode"required="required">
            </div>

            <label for="inputmerk" class="col-sm-4 col-form-label">Merk Kursi :</label>
            <div class="mx mt-2">
              <input type="text" class="form-control" name="merk" value="{{ $k->merkkursi }}"id="inputmerk"required="required">
            </div>

            <label for="inputstok" class="col-sm-4 col-form-label">Stok :</label>
            <div class="mx mt-2">
              <input type="number" class="form-control" name="stok" value="{{ $k->stockkursi }}" id="inputstok" required="required">
            </div>

            <div class="mt-2">
                <label for="inputsedia" class="col-form-label">Ketersediaan :</label>

                <div class="mx-4 form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sedia"  value="Y" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Tersedia
                    </label>
                </div>
                <div class="mx-2 form check form-check-inline">
                    <input class="form-check-input" type="radio" name="sedia"  value="N" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                    Tidak Tersedia
                    </label>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class ="btn btn-success"value="Simpan Data">
            </div>
        </div>
	</form>
	@endforeach
@endsection
