@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data pegawai</h3>
                                    <!-- Button trigger modal -->
                                    <div class="right">
                                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Pegawai
                                        </a>
                                    </div>
								</div>
								<div class="panel-body">
                                      <div class="col-6">
                                        
									<table class="table table-hover">
										<thead>
											<tr>
                                                <td>Nama</td>
                                                <td>jenis Kelamin</td>
                                                <td>telpon</td>
                                                <td>email</td>
                                                <td>jabatan</td>
                                                <td>alamat</td>
                                                <td>aksi</td>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_pegawai as $pegawai )
                                            <tr>
                                            <td>{{$pegawai->nama}}</td>
                                            <td>{{$pegawai->jenis_kelamin}}</td>
                                            <td>{{$pegawai->phone}}</td>
                                            <td>{{$pegawai->email}}</td>
                                            <td>{{$pegawai->jabatan}}</td>
                                            <td>{{$pegawai->alamat}}</td>
                                            <td><a href="pegawai/{{$pegawai->id}}/edit" class="btn btn_warning btn-sm">edit</a></td>
                                            <td><a href="pegawai/{{$pegawai->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('APAKAH ANDA YAKIN ?')"><i class="fa fa-warning">Hapus</i></a></td>
                                        </tr>
                                         @endforeach
										</tbody>
                                        
                                                </form>
                                                </div>
                                            </div>
									</table>
                                    
								</div>
							</div>
							<!-- END TABLE HOVER -->
					
        
                </div>
            </div>
        </div>
    </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.pegawai.create') }}" method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Nama </label>
                                                                <input name="nama" type="text" class="form-control" placeholder="masukan nama pegawai" id="nama" aria-describedby="emailHelp">
                                                                
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin </label><br>
                                                                <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                                                    <option selected>Jenis Kelamin</option>
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">telp</label>
                                                                <input name="phone" type="number" placeholder="masukan no tlp"class="form-control" id="telp" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">email</label>
                                                                <input name="email" type="email" class="form-control" placeholder="masukan email" id="email" aria-describedby="emailHelp">
                                                    
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                                                <input name="jabatan"type="text" class="form-control" placeholder="masukan Jabatan" id="Jabatan" aria-describedby="textHelp">
                                                            </div>
                                                            
                                                            <div class="form-floating">
                                                                <label for="floatingTextarea">alamat</label>
                                                                <textarea name="alamat" class="form-control" placeholder="masukan alamat" id="alamat"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                                <input name="password" type="password" class="form-control" id="password">
                                                            </div>  
                                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Data Pegawai</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.pegawai.create') }}" method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Nama </label>
                                                                <input name="nama" type="text" class="form-control" placeholder="masukan nama pegawai" id="nama" aria-describedby="emailHelp">
                                                                
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin </label><br>
                                                                <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                                                    <option selected>Jenis Kelamin</option>
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            
                                                            </div><div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">telp</label>
                                                                <input name="phone" type="number" placeholder="masukan no tlp"class="form-control" id="telp" aria-describedby="emailHelp">
                                                                
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">email</label>
                                                                <input name="email" type="email" class="form-control" placeholder="masukan email" id="email" aria-describedby="emailHelp">
                                                    
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                                                <input name="jabatan"type="text" class="form-control" placeholder="masukan Jabatan" id="Jabatan" aria-describedby="textHelp">
                                                            </div>
                                                            
                                                            <div class="form-floating">
                                                                <label for="floatingTextarea">alamat</label>
                                                                <textarea name="alamat" class="form-control" placeholder="masukan alamat" id="alamat"></textarea>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                                <input name="password" type="password" class="form-control" id="password">
                                                            </div>  
                                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>

            
@stop
