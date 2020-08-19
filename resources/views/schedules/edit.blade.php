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
                                <form action="/schedules/{{ $schedules->id }}/update" method="POST">
                         {{ (csrf_field()) }}
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="id" class="form-control" value="{{ $schedules->id }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Balita</label>
                            <input type="text" name="nama_balita" class="form-control" value="{{ $schedules->nama_balita }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Imunisasi</label>
                            <input type="text" name="nama_imunisasi" class="form-control" value="{{ $schedules->nama_imunisasi }}">
                        </div>
                        <div class="form-group">
                            <label>Jadwal Imunisasi</label>
                            <input type="date" name="jadwal_imunisasi" class="form-control" value="{{ $schedules->jadwal_imunisasi }}" required>
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