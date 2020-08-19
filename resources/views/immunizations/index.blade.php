@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Imunisasi</h3>
                                    <form class="navbar-form navbar-left" method="GET" action="/immunizations">
                                        <div class="right">
                                            <input name="cari" type="text" value="" class="form-control" placeholder="Cari nama imunisasi...">
                                        </div>
                                    </form>

								</div>
								<div class="panel-body">
                                    <div class="center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    </div>
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Imunisasi ID</th>
                                                <th>Nama</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                                <th></th>
											</tr>
										</thead>
										<tbody>
                                        
                                        @foreach($immunizations as $immunization)
                                            <tr>
                                                <td>{{$immunization->imunisasi_id}}</td>
                                                <td>{{$immunization->nama}}</td>
                                                <td>{{$immunization->deskripsi}}</td>
                                                <td><a href="/immunizations/{{ $immunization->id }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                                <td><a href="/immunizations/{{ $immunization->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin di hapus?')">Hapus</a></td>
                                            </tr>
                                        @endforeach
										</tbody>
									</table>
                                    <div class="table-bottom">
                                        <div class="pull-left">
                                            <strong>Jumlah Data : {{$jumlah_data}}</strong>
                                        </div>
                                    </div>
								</div>
							</div>
            </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Imunisasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/immunizations/create" method="POST">
                    {{ (csrf_field()) }}
                        <div class="form-group">
                            <label>Imunisasi ID</label>
                            <input type="number" name="imunisasi_id" class="form-control" placeholder="max 3 digit" max="999" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Imunisasi</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

@stop