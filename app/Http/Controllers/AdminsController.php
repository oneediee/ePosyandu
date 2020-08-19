<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $admins = Admin::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $admins = Admin::all();
        }

        $admin_list = Admin::all()->sortBy('nama');
        $jumlah_data = $admin_list->count();
        return view('admins.index', compact('admins', 'jumlah_data'));
    }

    public function create(Request $request){
        $user = new \App\User;
        $user->role = 'admin';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        Admin::create($request->all());
        return redirect('/admins')->with('sukses','Data Berhasil Di Tambah');
    }

    public function edit($id){
        $admins = Admin::find($id);
        return view('admins.edit', compact('admins'));
    }

    public function update(Request $request,$id){
        $admins = Admin::find($id);
        $admins->update ($request->all());
        return redirect('/admins')->with('sukses', 'Data Berhasil Di Ubah');
    }

    public function delete($id){
        $admins = Admin::find($id);
        $admins->delete();
        return redirect('/admins')->with('sukses', 'Data Berhasil Di Hapus');
    }
}
