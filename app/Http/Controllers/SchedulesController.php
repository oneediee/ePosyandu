<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $schedules = Schedule::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $schedules = Schedule::all();
        }

        $Schedule_list = Schedule::all()->sortBy('nama');
        $jumlah_data = $Schedule_list->count();
        return view('schedules.index', compact('schedules', 'jumlah_data'));
    }

    public function create(Request $request){
        Schedule::create($request->all());
        return redirect('/schedules')->with('sukses','Data Berhasil Di Tambah');
    }

    public function edit($id){
        $schedules = Schedule::find($id);
        return view('schedules.edit', compact('schedules'));
    }

    public function update(Request $request,$id){
        $schedules = Schedule::find($id);
        $schedules->update ($request->all());
        return redirect('/schedules')->with('sukses', 'Data Berhasil Di Ubah');
    }

    public function delete($id){
        $schedules = Schedule::find($id);
        $schedules->delete();
        return redirect('/schedules')->with('sukses', 'Data Berhasil Di Hapus');
    }
}
