@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Konten</h3>
                            
								</div>
								<div class="panel-body">
                                    <form action="/admin/konten/{{$konten->id}}/update" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Judul</label>
                                            <input name="judul" value="{{$konten->judul}}"type="text" class="form-control" id="nama" placeholder="masukan nama villa" aria-describedby="emailHelp">
                                            
                                        </div>
                                        <div class="form-floating">
                                            <label for="exampleInputEmail1" class="form-label">Isi </label>
                                            <textarea name="isi" class="form-control" placeholder="masukan isi villa" rows="4">{{$konten->isi}}</textarea>
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Kategori</label><br>
                                            <select name="tag" class="form-select" aria-label="Default select example">
                                                <option selected hidden>- Pilih Kategori -</option>
                                                <option value="event"@if($konten->tag == 'event') selected @endif>Event</option>
                                                <option value="fasilitas"@if($konten->tag == 'fasilitas') selected @endif>Fasilitas</option>
                                                <option value="sejarah"@if($konten->tag == 'sejarah') selected @endif>Sejarah</option>
                                            </select>
                                        </div>
                                        <div class="form-floating">
                                            <label for="floatingTextarea">Gambar</label>
                                            <input type="file" name="gambar" id="gambar" class="form-control">
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
