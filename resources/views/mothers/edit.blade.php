@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Ubah Data</h3>
								</div>
								<div class="panel-body">
                                <form action="/mothers/{{ $mothers->id }}/update" method="POST">
                         {{ (csrf_field()) }}
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control" value="{{ $mothers->nik }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $mothers->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1" >
                                <option value="L" @if($mothers->jenis_kelamin=='L') selected @endif >Laki Laki</option>
                                <option value="P" @if($mothers->jenis_kelamin=='P') selected @endif >Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" >{{ $mothers->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="number" name="no_hp" class="form-control" value="{{ $mothers->no_hp }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Balita</label>
                            <input type="text" name="nama_anak" class="form-control" value="{{ $mothers->nama_anak }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $mothers->email }}" readonly>
                        </div>
                            <button type="submit" class="btn btn-warning">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                                </form>  
								</div>
							</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content1')
    <h1>Edit Data Siswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('sukses') }}
        </div>
        @endif
        <div class="row">
        <div class="col lg-12">
            
            </div>    
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kader</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                </div>
            </div>
        </div>

@endsection