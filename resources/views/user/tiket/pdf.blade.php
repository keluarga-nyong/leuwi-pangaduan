<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    </style>
    </head>
    <body>
        <h3 style="text-align: center;">Bukti Pembayaran</h3>
        <div class="row" style="display: flex; flex-wrap: wrap;">
            <table style="width:72%; border-collapse: collapse;" >
                <thead style=" background-color: rgb(255, 255, 255);">
                    <tr>
                        <th colspan="3" style="text-align:center; padding: 5px 0 5px 0; border: 1px solid #000; background-color: rgb(0, 0, 0, 0.3);">Nama Pelanggan & Alamat</th>
                    </tr>
                    
                </thead>
                <tbody style="border: 1px solid #000; background: rgb(255, 255, 255);">
                    <tr style="margin-left:10px">
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama</td>
                        <td >:</td>
                        <td>{{$booking->user->name}}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nomor Telepon</td>
                        <td>:</td>
                        <td>0{{$booking->user->phone}}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat</td>
                        <td>:</td>
                        <td>{{$booking->user->address}}</td>
                    </tr>
                </tbody>
            </table>
            <table style="width:26%; border-collapse: collapse; float:right;">
                <thead style="border: 1px solid #000;">
                    <tr>
                        <th style="background-color: rgb(0, 0, 0, 0.3); padding: 5px 0 7px 0;">Pengunjung</th>
                    </tr>
                </thead>
                <tbody style="border: 1px solid #000;">
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dewasa : {{$booking->dewasa}}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anak&nbsp;&nbsp;&nbsp;&nbsp; : {{$booking->anak}}</td>  
                    </tr>
                </tbody>
                <tfoot style="border: 1px solid #000;">
                    <tr>
                        <td style="text-align: center;">Jumlah {{$booking->dewasa+$booking->anak}} Orang    </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <br>
        <table style="width:100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th colspan="2" style="border: 1px solid #000; background-color: rgb(0, 0, 0, 0.3); padding: 5px 0 5px 0;">Deskripsi</th>
                    <th style="border: 1px solid #000; background-color: rgb(0, 0, 0, 0.3); padding: 5px 0 5px 0;">Jumlah</th>
                </tr>
            </thead>
            <tbody  style="border: 1px solid #000;">
                <tr >
                    <td style="text-align:right;">ID :</td>
                    <td >{{$booking->id_pembayaran}}</td>
                    <td rowspan="4"  style="border: 1px solid #000; text-align: centerl"></td>
                </tr>
                <tr>
                    <td style="text-align:right;">Tanggal :</td>
                    <td>{{date('d/m/Y',strtotime($booking->tanggal))}}</td>
                </tr>
                <tr>
                    <td style="text-align:right;">Dewasa :</td>
                    <td>{{$booking->dewasa}} Orang</td>
                </tr>
                <tr>
                    <td style="text-align:right;">Anak :</td>
                    <td>{{$booking->anak}} Orang</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"  style="text-align:right; border: 1px solid #000; background-color: rgb(0, 0, 0, 0.3); padding: 5px 0 5px 0;"><strong>Total</strong>  &nbsp;</td>
                    <td style="border: 1px solid #000; background-color: rgb(0, 0, 0, 0.3); padding: 5px 0 5px 0;"><strong>&nbsp;Rp. {{number_format($booking->total_harga,0,',','.')}}</strong> </td>
                </tr>
            </tfoot>
        </table>
        <br>
        <table style="float:right">
            <tbody>
                <tr>
                    <td>{{date('l, d-m-Y', strtotime($tanggal))}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td style="text-align: center;">Leuwi Pangaduan</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>