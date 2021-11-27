@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Status Tiket</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/admin/psntiket/{{$psn_tiket->id}}/update" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama </label>
                                    <input name="nama" value="{{$psn_tiket->id_pembayaran}}" type="text" class="form-control" placeholder="masukan nama tiket" id="nama" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin </label><br>
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option value="0" @if($psn_tiket->status == '0') selected @endif>Belum Bayar</option>
                                        <option value="1"@if($psn_tiket->status == '1') selected @endif>Sudah Bayar</option>
                                    </select>
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
