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
                                <form action="/babies/{{ $babies->id }}/update" method="POST">
                         {{ (csrf_field()) }}
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control" value="{{ $babies->nik }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $babies->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1" >
                                <option value="L" @if($babies->jenis_kelamin=='L') selected @endif >Laki Laki</option>
                                <option value="P" @if($babies->jenis_kelamin=='P') selected @endif >Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $babies->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label>Berat Badan (kg)</label>
                            <input type="number" name="berat_badan" class="form-control" value="{{ $babies->berat_badan }}">
                        </div>
                        <div class="form-group">
                            <label>Tinggi Badan (cm)</label>
                            <input type="number" name="tinggi_badan" class="form-control" value="{{ $babies->tinggi_badan }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control" value="{{ $babies->nama_ibu }}">
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Balita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                </div>
            </div>
        </div>

@endsection