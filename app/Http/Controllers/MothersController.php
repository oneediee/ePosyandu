<?php

namespace App\Http\Controllers;

use App\Mother;
use Illuminate\Http\Request;

class MothersController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $mothers = Mother::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $mothers = Mother::all();
        }

        $mother_list = Mother::all()->sortBy('nama');
        $jumlah_data = $mother_list->count();
        return view('mothers.index', compact('mothers', 'jumlah_data'));
    }

    public function create(Request $request){
        $user = new \App\User;
        $user->role = 'mother';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        Mother::create($request->all());
        return redirect('/mothers')->with('sukses','Data Berhasil Di Tambah');
    }

    public function edit($id){
        $mothers = Mother::find($id);
        return view('mothers.edit', compact('mothers'));
    }

    public function update(Request $request,$id){
        $mothers = Mother::find($id);
        $mothers->update ($request->all());
        return redirect('/mothers')->with('sukses', 'Data Berhasil Di Ubah');
    }

    public function delete($id){
        $mothers = Mother::find($id);
        $mothers->delete();
        return redirect('/mothers')->with('sukses', 'Data Berhasil Di Hapus');
    }
}
