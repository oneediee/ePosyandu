<?php

namespace App\Http\Controllers;

use App\Baby;
use Illuminate\Http\Request;

class BabiesController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $babies = Baby::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $babies = Baby::all();
        }

        $baby_list = Baby::all()->sortBy('nama');
        $jumlah_data = $baby_list->count();
        return view('babies.index', compact('babies', 'jumlah_data'));
    }

    public function create(Request $request){
        Baby::create($request->all());
        return redirect('/babies')->with('sukses','Data Berhasil Di Tambah');
    }

    public function edit($id){
        $babies = Baby::find($id);
        return view('babies.edit', compact('babies'));
    }

    public function update(Request $request,$id){
        $babies = Baby::find($id);
        $babies->update ($request->all());
        return redirect('/babies')->with('sukses', 'Data Berhasil Di Ubah');
    }

    public function delete($id){
        $babies = Baby::find($id);
        $babies->delete();
        return redirect('/babies')->with('sukses', 'Data Berhasil Di Hapus');
    }
}
