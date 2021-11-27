@extends('layouts.user.new-app')

@section('content')
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-send">
						<h3 class="text-center bold">Konfirmasi Pemesanan</h3><hr>
						<p class="send-wa">
							1. Tekan tombol Kirim Pesan untuk melakukan chat via Whastapp dengan Tim Leuwi Pangaduan. <br><br>
							2. Setelah itu, silahkan melakukan pembayaran dengan melakukan transfer ke salah satu dari rekening Leuwi Pangaduan: <br>
							&nbsp;&nbsp;&nbsp;&nbsp;- Bank Mandiri: 123–0090–111–909  a.n. Leuwi Pangaduan <br>
							&nbsp;&nbsp;&nbsp;&nbsp;- Bank BCA: 372–171–7273 a.n. Leuwi Pangaduan* <br><br>
							3. Foto/ pindai (scan)/ screenshot bukti transfer anda. Kami menganjurkan agar anda juga tetap menyimpan bukti transfer anda, sebagai bukti jika terjadi perselisihan <br><br>
							4. Kirim foto, hasil pindaian (scan), atau screenshot bukti transfer anda ke Whatsapp Leuwi Pangaduan. <br><br>
							5. Tim Leuwi Pangaduan akan memastikan bahwa bukti transfer yang anda upload valid dan dana yang anda kirimkan berhasil terkirim. <br><br>
						</p>
						<div class="form-btn text-center">
								<a class="btn-wa" href="{{$url}}"><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp;&nbsp;Kirim Pesan</a>
						</div>
                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection