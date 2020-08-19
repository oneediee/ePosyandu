<?php

namespace App\Http\Controllers;

use App\Immunization;
use Illuminate\Http\Request;

class ImmunizationsController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $immunizations = Immunization::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $immunizations = Immunization::all();
        }

        $immunization_list = Immunization::all()->sortBy('nama');
        $jumlah_data = $immunization_list->count();
        return view('immunizations.index', compact('immunizations', 'jumlah_data'));
    }

    public function create(Request $request){
        Immunization::create($request->all());
        return redirect('/immunizations')->with('sukses','Data Berhasil Di Tambah');
    }

    public function edit($id){
        $immunizations = Immunization::find($id);
        return view('immunizations.edit', compact('immunizations'));
    }

    public function update(Request $request,$id){
        $immunizations = Immunization::find($id);
        $immunizations->update ($request->all());
        return redirect('/immunizations')->with('sukses', 'Data Berhasil Di Ubah');
    }

    public function delete($id){
        $immunizations = Immunization::find($id);
        $immunizations->delete();
        return redirect('/immunizations')->with('sukses', 'Data Berhasil Di Hapus');
    }
}
