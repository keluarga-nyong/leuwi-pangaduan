@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Penginapan</h3>
                                    <!-- Button trigger modal -->
                                    <div class="right">
                                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Villa
                                        </a>
                                    </div>
								</div>
								<div class="panel-body">
                                      <div class="col-6">
                                        
									<table class="table table-hover">
										<thead>
											<tr>
                                                <td>Nama</td>
                                                <td>Detail</td>
                                                <td>Harga</td>
                                                <td>action</td>
                                                
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_penginapan as $penginapan )
                                            <tr>
                                                <td>{{$penginapan->nama_villa}}</td>
                                                <td>{{$penginapan->detail}}</td>
                                                <td>{{$penginapan->harga}}</td>
                                                <td><a href="penginapan/{{$penginapan->id}}/edit" class="btn btn_warning btn-sm">
                                                    edit
                                                    </a></td>
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data penginapan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="{{ route('admin.penginapan.create') }}" method="post">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama Villa</label>
                                                        <input name="nama_villa" type="text" class="form-control" id="nama" placeholder="masukan nama villa" aria-describedby="emailHelp">
                                                        
                                                    </div>
                                                    <div class="form-floating">
                                                        <label for="exampleInputEmail1" class="form-label">Detail Villa </label>
                                                        <textarea name="detail" class="form-control" placeholder="masukan detail villa" rows="4"></textarea>
                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Harga </label>
                                                        <input name="harga" type="number" class="form-control" placeholder="masukan harga villa" id="nama" aria-describedby="emailHelp">
                                                        
                                                    </div>
                                                </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
@stop


