@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Data pegawai</h3>
                            
								</div>
								<div class="panel-body">
                                    <form action="/admin/pegawai/{{$pegawai->id}}/update" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama </label>
                                            <input name="nama" value="{{$pegawai->nama}}" type="text" class="form-control" placeholder="masukan nama pegawai" id="nama" aria-describedby="emailHelp">
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin </label><br>
                                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                                <option value="Laki-Laki" @if($pegawai->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                                <option value="Perempuan"@if($pegawai->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                            </select>
                                            </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">telp</label>
                                            <input name="phone" value="{{$pegawai->phone}}" type="number" placeholder="masukan no tlp"class="form-control" id="telp" aria-describedby="emailHelp">
                                            
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">email</label>
                                            <input name="email" value="{{$pegawai->email}}" type="email" class="form-control" placeholder="masukan email" id="email" aria-describedby="emailHelp">
                                
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                            <input name="jabatan" value="{{$pegawai->jabatan}}"type="text" class="form-control" placeholder="masukan Jabatan" id="Jabatan" aria-describedby="textHelp">
                                        </div>
                                        
                                        <div class="form-floating">
                                            <label for="floatingTextarea">alamat</label>
                                            <textarea name="alamat" class="form-control" id="alamat">{{$pegawai->alamat}}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control" id="password">
                                        </div>  
                                    </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>
								</div>
							</div>
							<!-- END TABLE HOVER -->
					
        
                </div>
            </div>
        </div>
    </div>


            
@stop
