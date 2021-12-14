@extends('layout.ceria')

@section('isikonten')

	<h3 class="mt-2">Detail Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	@foreach($pegawai as $p)
        <div class="form-group row w-50">
            <label for="inputnama" class="col-sm-4 col-form-label">Nama :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $p->pegawai_nama }}
            </div>

            <label for="inputjab" class="col-sm-4 col-form-label">Jabatan :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $p->pegawai_jabatan }}
            </div>

            <label for="inputumur" class="col-sm-4 col-form-label">Umur :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $p->pegawai_umur }}
            </div>

            <label for="inputalamat" class="col-sm-4 col-form-label"> Alamat :</label>
            <div class="col-sm-8 mb-3">
                <label class="col-sm-4 col-form-label">{{ $p->pegawai_alamat }}</label>
            </div>
        </div>
	</form>
	@endforeach
@endsection
