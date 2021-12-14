@extends('layout.ceria')

@section('isikonten')

	<h3 class="mt-2">Detail Data pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	@foreach($pendapatan as $p)
        <div class="form-group row w-40">

            <label for="inputkode" class="col-sm-5 col-form-label">ID Pegawai :</label>
            <div class="col-sm-5 mb-3">
                <label class="col-sm-4 col-form-label">{{ $p->pendapatan_idpegawai  }}
            </div>

            <label for="inputmerk" class="col-sm-5 col-form-label">Bulan :</label>
            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $p->pendapatan_bulan }}
            </div>

            <label for="inputstok" class="col-sm-5 col-form-label">Tahun :</label>
            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $p->pendapatan_tahun }}
            </div>

            <label for="inputstok" class="col-sm-5 col-form-label">Gaji :</label>
            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $p->pendapatan_gaji }}
            </div>

            <label for="inputstok" class="col-sm-5 col-form-label">Tunjangan :</label>
            <div class="col-sm-5 mb-3">
                <label class="col col-form-label">{{ $p->pendapatan_tunjangan }}
            </div>

            </div>
            </div>
	@endforeach
@endsection
