@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Kader</h3>
                                    <form class="navbar-form navbar-left" method="GET" action="/admins">
                                        <div class="right">
                                            <input name="cari" type="text" value="" class="form-control" placeholder="Cari nama kader...">
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
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($admins as $admin)
                                            <tr>
                                                <td>{{$admin->nik}}</td>
                                                <td>{{$admin->nama}}</td>
                                                <td>{{$admin->jenis_kelamin}}</td>
                                                <td>{{$admin->alamat}}</td>
                                                <td>{{$admin->no_hp}}</td>
                                                <td>{{$admin->email}}</td>
                                                <td><a href="/admins/{{ $admin->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/admins/{{ $admin->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin di hapus?')">Hapus</a></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kader</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/admins/create" method="POST">
                    {{ (csrf_field()) }}
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                <option value="L">Laki Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="number" name="no_hp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
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