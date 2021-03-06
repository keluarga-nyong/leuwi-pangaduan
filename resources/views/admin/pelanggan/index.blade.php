@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Pelanggan</h3>
                                    
								</div>
								<div class="panel-body">
                                      <div class="col-6">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <td>Nama</td>
                                                <td>Email</td>
                                                <td>Nomor HP</td>
                                                <td>Alamat</td>
                                                
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_pelanggan as $pelanggan )
                                            <tr>
                                                <td>{{$pelanggan->name}}</td>
                                                <td>{{$pelanggan->email}}</td>
                                                <td>{{$pelanggan->phone}}</td>
                                                <td>{{$pelanggan->address}}</td>
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pelanggan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="/pelanggan/create" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama </label>
                                                        <input name="nama_pelanggan" type="text" class="form-control" id="nama" aria-describedby="emailHelp">
                                                        <div id="emailHelp" class="form-text">Masukan Nama </div>
                                                    </div>     
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">email</label>
                                                        <input name="email_pelanggan" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                                        <div id="emailHelp" class="form-text">Masukan email</div>
                                                    </div>   
                                                   <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">No.ktp</label>
                                                        <input name="no_ktp" type="number" class="form-control" id="ktp" aria-describedby="emailHelp">
                                                        <div id="emailHelp" class="form-text">Masukan No KTP</div>
                                                    </div>                    
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">telp</label>
                                                        <input name="tlp_pelanggan" type="number" class="form-control" id="telp" aria-describedby="emailHelp">
                                                        <div id="emailHelp" class="form-text">Masukan Telp</div>
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
@stop
