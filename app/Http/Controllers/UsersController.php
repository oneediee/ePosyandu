<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $users = User::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $users = User::all();
        }

        $user_list = User::all()->sortBy('nama');
        $jumlah_data = $user_list->count();
        return view('users.index', compact('users', 'jumlah_data'));
    }

    public function create(Request $request){
        User::create($request->all());
        return redirect('/users')->with('sukses','Data Berhasil Di Tambah');
    }

    public function edit($id){
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request,$id){
        $users = User::find($id);
        $users->update ($request->all());
        return redirect('/users')->with('sukses', 'Data Berhasil Di Ubah');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect('/users')->with('sukses', 'Data Berhasil Di Hapus');
    }
}
