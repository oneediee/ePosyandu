@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Jadwal Imunisasi</h3>
                                    <form class="navbar-form navbar-left" method="GET" action="/schedules">
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
                                                <th>ID</th>
                                                <th>Nama Balita</th>
                                                <th>Nama Imunisasi</th>
                                                <th>Jadwal Imunisasi</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        
                                        @foreach($schedules as $schedule)
                                            <tr>
                                                <td>{{$schedule->id}}</td>
                                                <td>{{$schedule->nama_balita}}</td>
                                                <td>{{$schedule->nama_imunisasi}}</td>
                                                <td>{{$schedule->jadwal_imunisasi}}</td>
                                                <td><a href="/schedules/{{ $schedule->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/schedules/{{ $schedule->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin di hapus?')">Hapus</a></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Imunisasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/schedules/create" method="POST">
                    {{ (csrf_field()) }}
                        <div class="form-group">
                            <label>Nama Balita</label>
                            <input type="text" name="nama_balita" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Imunisasi</label>
                            <input type="text" name="nama_imunisasi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jadwal Imunisasi</label>
                            <input type="date" name="jadwal_imunisasi" class="form-control" required>
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