@extends('layouts.admin.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Weekly Overview</h3>
                        <p class="panel-subtitle"><?php echo "Period " . date("Y/m/d") . "<br>";?></p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-download"></i></span>
                                    <p>
                                        <h4 class="text-right">{{$totalpengunjung}}</h4>
                                        <h3 class="text-right">PENGUNJUNG</h3>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                    <p>
                                        <h4 class="text-right"> Rp.{{number_format($hsl_tiket,0, ',' , '.')}} </h4>
                                        <h3 class="text-right"> PENJUALAN TIKET</h3>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-eye"></i></span>
                                    <p>
                                        <h4 class="text-right"> Rp.{{number_format($hsl_villa,0, ',' , '.')}} </h4>
                                        <h3 class="text-right"> PENYEWAAN VILLA</h3>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                SADAASA
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop