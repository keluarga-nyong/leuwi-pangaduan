@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data Penginapan</h3>
                            
								</div>
								<div class="panel-body">
                                    <form action="/admin/penginapan/{{$penginapan->id}}/update" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama Villa</label>
                                            <input name="nama_villa" value="{{$penginapan->nama_villa}}"type="text" class="form-control" id="nama" placeholder="masukan nama villa" aria-describedby="emailHelp">
                                            
                                        </div>
                                        <div class="form-floating">
                                            <label for="exampleInputEmail1" class="form-label">Detail Villa </label>
                                            <textarea name="detail" class="form-control" placeholder="masukan detail villa" rows="4">{{$penginapan->detail}}</textarea>
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Harga </label>
                                            <input name="harga" type="number" value="{{$penginapan->harga}}" class="form-control" placeholder="masukan harga villa" id="nama" aria-describedby="emailHelp">
                                            
                                        </div>
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
					
        
                </div>
            </div>
        </div>
    </div>


            
@stop
