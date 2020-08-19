@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Orang Tua</h3>
                                    <form class="navbar-form navbar-left" method="GET" action="/mothers">
                                        <div class="right">
                                            <input name="cari" type="text" value="" class="form-control" placeholder="Cari nama orang tua...">
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
                                                <th>Nama Balita</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($mothers as $mother)
                                            <tr>
                                                <td>{{$mother->nik}}</td>
                                                <td>{{$mother->nama}}</td>
                                                <td>{{$mother->jenis_kelamin}}</td>
                                                <td>{{$mother->alamat}}</td>
                                                <td>{{$mother->no_hp}}</td>
                                                <td>{{$mother->nama_anak}}</td>
                                                <td>{{$mother->email}}</td>
                                                <td><a href="/mothers/{{ $mother->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/mothers/{{ $mother->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin di hapus?')">Hapus</a></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Orang Tua</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/mothers/create" method="POST">
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
                            <label>Nama Balita</label>
                            <input type="text" name="nama_anak" class="form-control">
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