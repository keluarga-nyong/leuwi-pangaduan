@extends('layouts.admin.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-md-12">
                
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Kehadiran</h3>
                                    <!-- Button trigger modal -->
                                    <div class="right">
                                        <form class="float-right btn-download" action="{{ route('admin.kehadiran.excel-users') }}" method="get">
                                            <input type="hidden" name="tanggal" value="{{ request('tanggal', date('Y-m-d')) }}">
                                            <button class="btn btn-down" type="submit" title="Download">&nbsp;<i class="fa fa-download fa-3x" aria-hidden="true">&nbsp;</i> </button>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-6 mb-1">
                                        <form action="{{ route('admin.kehadiran.search') }}" method="get">
                                            <div class="form-group row" style="margin-top: 20px;">
                                                <label for="tanggal" class="col-form-label col-sm-3">Tanggal</label>
                                                <div class="input-group col-sm-9">
                                                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ request('tanggal', date('Y-m-d')) }}">
                                                    <span class="input-group-btn btn-cari">
                                                        <button class="btn btn-cari" type="submit">Cari</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>
                                
								<div class="panel-body">
                                      <div class="col-6">
                                        
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>NRP</th>
                                                <th>Nama</th>
                                                <th>Keterangan</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Keluar</th>
                                                <th>Total Jam</th>
											</tr>
										</thead>
										<tbody>
                                        @if (!$presents->count())
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak ada data yang tersedia</td>
                                                </tr>
                                            @else
                                                @foreach ($presents as $present)
                                                    <tr>
                                                        <td>{{ $present->user->id }}</td>
                                                        <td>{{ $present->user->nama }}</td>
                                                        <td>{{ $present->keterangan }}</td>
                                                        @if ($present->jam_masuk)
                                                            <td>{{ date('H:i:s', strtotime($present->jam_masuk)) }}</td>
                                                        @else
                                                            <td>-</td>
                                                        @endif
                                                        @if($present->jam_keluar)
                                                            <td>{{ date('H:i:s', strtotime($present->jam_keluar)) }}</td>
                                                            <td>
                                                                @if (strtotime($present->jam_keluar) <= strtotime($present->jam_masuk))
                                                                    {{ 21 - (\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse($present->jam_keluar))) }}
                                                                @else 
                                                                    @if (strtotime($present->jam_keluar) >= strtotime('19:00:00'))
                                                                        {{ (\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse($present->jam_keluar))) - 3 }}
                                                                    @else
                                                                        {{ (\Carbon\Carbon::parse($present->jam_masuk)->diffInHours(\Carbon\Carbon::parse($present->jam_keluar))) - 1 }}
                                                                    @endif
                                                                @endif
                                                            </td>
                                                        @else
                                                            <td>-</td>
                                                            <td>-</td>
                                                        @endif
                                                    </tr>
                                                @endforeach 
                                            @endif
										</tbody>
									</table>
                                    <div class="float-right">
                                        {{ $presents->links() }}
                                    </div>
								</div>
							</div>
							<!-- END TABLE HOVER -->
					
        
                </div>
            </div>
        </div>    
@stop
