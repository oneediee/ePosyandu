@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Balita</h3>
                                    <form class="navbar-form navbar-left" method="GET" action="/babies">
                                        <div class="right">
                                            <input name="cari" type="text" value="" class="form-control" placeholder="Cari nama balita...">
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
                                                <th>NIK Balita</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Berat Badan (kg)</th>
                                                <th>Tinggi Badan (cm)</th>
                                                <th>Nama Ibu</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        
                                        @foreach($babies as $baby)
                                            <tr>
                                                <td>{{$baby->nik}}</td>
                                                <td>{{$baby->nama}}</td>
                                                <td>{{$baby->jenis_kelamin}}</td>
                                                <td>{{$baby->tanggal_lahir}}</td>
                                                <td>{{$baby->berat_badan}}</td>
                                                <td>{{$baby->tinggi_badan}}</td>
                                                <td>{{$baby->nama_ibu}}</td>
                                                <td><a href="/babies/{{ $baby->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/babies/{{ $baby->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin di hapus?')">Hapus</a></td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Balita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="/babies/create" method="POST">
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
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Berat Badan (kg)</label>
                            <input type="number" name="berat_badan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tinggi Badan (cm)</label>
                            <input type="number" name="tinggi_badan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" name="nama_ibu" class="form-control">
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