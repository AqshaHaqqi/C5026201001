<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KursiController extends Controller
{

    public function index(){

        $kursi = DB::table('kursi')->paginate(3);

    	return view('kursi.index',['kursi' => $kursi]);
    }
    public function tambah()
    {


        return view('kursi.tambah');

    }
    public function store(Request $request)
    {

        DB::table('kursi')->insert([
            'kodekursi' => $request->kode,
            'merkkursi' => $request->merk,
            'stockkursi' => $request->stok,
            'tersedia' => $request->sedia,
        ]);

        return redirect('/kursi');
    }
    public function edit($id)
    {

        $kursi = DB::table('kursi')->where('kodekursi',$id)->get();

        return view('kursi.edit',['kursi' => $kursi]);

    }
    public function update(Request $request)
    {
        DB::table('kursi')->where('kodekursi',$request->id)->update([
            'kodekursi' => $request->id,
            'merkkursi' => $request->merk,
            'stockkursi' => $request->stok,
            'tersedia' => $request->sedia
        ]);
        return redirect('/kursi');
    }
    public function hapus($id)
    {

        DB::table('kursi')->where('kodekursi',$id)->delete();


        return redirect('/kursi');
    }
    public function cari(Request $request){

		$cari = $request->cari;


		$kursi = DB::table('kursi')
        ->where('merkkursi','like',"%".$cari."%")
        ->orWhere('tersedia','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data pegawai ke view index
		return view('kursi.index',['kursi' => $kursi]);
	}
    public function view($id){
        //ambil data berdasarkan id yang terpilih
        $kursi = DB::table('kursi')->where('kodekursi',$id)->get();
        //passing data pegawai yang didapat ke view edit.blade.php
        return view('kursi.detail',['kursi' => $kursi]);
    }
}
