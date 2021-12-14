@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Konten</h3>
                                    <!-- Button trigger modal -->
                                    <div class="right">
                                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Konten
                                        </a>
                                    </div>
								</div>
								<div class="panel-body" style="overflow-x:auto;" >
									<table class="table table-hover">
										<thead>
											<tr>
                                                <td>Judul</td>
                                                <td >Isi</td>
                                                <td>Gambar</td>
                                                <td>Kategori</td>
                                                <td>aksi</td>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_konten as $konten )
                                            <tr>
                                            <td>{{$konten->judul}}</td>
                                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:500px;">{{$konten->isi}}</td>
                                            <td>{{$konten->gambar}}</td>
                                            <td>{{$konten->tag}}</td>
                                            <td><a href="konten/{{$konten->id}}/edit" class="btn btn_warning btn-sm"><i class="fa fa-warning">edit</i></a></td>
                                            <td><a href="konten/{{$konten->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('APAKAH ANDA YAKIN ?')"><i class="fa fa-warning">Hapus</i></a></td>
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
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Konten</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.konten.create') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Judul </label>
                                                                <input name="judul" type="text" class="form-control" placeholder="masukan Judul" id="nama" aria-describedby="emailHelp">
                                                                
                                                            </div>                                                                                                                    
                                                            <div class="form-floating">
                                                                <label for="floatingTextarea">isi</label>
                                                                <textarea name="isi" class="form-control" placeholder="masukan alamat" id="alamat"></textarea>
                                                            </div>  
                                                            <div class="mb-3">
                                                                <label for="kategori" class="form-label">Kategori</label><br>
                                                                <select name="tag" class="form-select" aria-label="Default select example">
                                                                    <option selected hidden>- Pilih Kategori -</option>
                                                                    <option value="event">Event</option>
                                                                    <option value="fasilitas">Fasilitas</option>
                                                                    <option value="sejarah">Sejarah</option>
                                                                    <option value="galeri">Galeri</option>
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
                                                        <form action="{{ route('admin.konten.create') }}" method="post">
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