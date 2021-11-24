@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data pemesanan penginapan</h3>
                                    
								</div>
								<div class="panel-body">
                                      <div class="col-6">
                                        
									<table class="table table-hover">
										<thead>
											<tr>
                                                <td>Nama Pelanggan</td>
                                                <td>Nama Villa</td>
                                                <td>Check In</td>
                                                <td>Check Out</td>
                                                <td>Total Harga</td>
                                                
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_pemesanan_penginapan as $psn_penginapan )
                                            <tr>
                                                <td>{{$psn_penginapan->user->name}}</td>
                                                <td>{{$psn_penginapan->villa->nama_villa}}</td>
                                                <td>{{$psn_penginapan->checkin}}</td>
                                                <td>{{$psn_penginapan->checkout}}</td>
                                                <td>{{$psn_penginapan->total_harga}}</td>
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
                                                <form action="/penginapan/create" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nama </label>
                                                        <input name="nama_villa" type="text" class="form-control" id="nama" aria-describedby="emailHelp">
                                                        <div id="emailHelp" class="form-text">Masukan Nama </div>
                                                    </div>
                                                    <div class="form-floating">
                                                        <textarea name="detail_villa" class="form-control" placeholder="masukan detail villa" rows="4"></textarea>
                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">harga </label>
                                                        <input name="harga_villa" type="number" class="form-control" id="nama" aria-describedby="emailHelp">
                                                        <div id="emailHelp" class="form-text">masukan harga villa </div>
                                                    </div>
                                                </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
@stop


