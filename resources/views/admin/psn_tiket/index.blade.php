@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data pemesanan Tiket</h3>
                                    
								</div>
								<div class="panel-body">
                                      <div class="col-6">
                                        
									<table class="table table-hover">
										<thead>
											<tr>
                                                <td>Nomor Tiket</td>
                                                <td>Nama Pelanggan</td>
                                                <td>Tanggal</td>
                                                <td>Dewasa</td>
                                                <td>Anak</td>
                                                <td>Total Harga</td>
                                                <td>Status</td>
                                                <td>Aksi</td>
											</tr>
										</thead>
										<tbody>
                                        @foreach($psn_tiket as $tiket )
                                            <tr>
                                                <td>{{$tiket->id_pembayaran}}</td>
                                                <td>{{$tiket->user->name}}</td>
                                                <td>{{$tiket->tanggal}}</td>
                                                <td>{{$tiket->dewasa}}</td>
                                                <td>{{$tiket->anak}}</td>
                                                <td>{{$tiket->total_harga}}</td>
                                                <td>
                                                    @if($tiket->status == 0)
                                                    <span class="status-no">Belum Bayar</span> 
                                                    @else
                                                    <span class="status-ok">Sudah Bayar</span> 
                                                    @endif
                                                </td>
                                                <td><a href="psntiket/{{$tiket->id}}/edit" class="btn btn_warning btn-sm">
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


