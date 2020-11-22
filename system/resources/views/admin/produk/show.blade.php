@extends('admin.template.base')

@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="card-header">
						<strong>Tambah Data Produk</strong>
					</div>
					<div class="card-body container-fluid">
					<h3>{{$produk->nama}}</h3>  <hr style="border: 1px solid #444444">
						<p>
							<b style="color: red">Rp. {{number_format($produk->harga)}} </b>|
								Stok : {{$produk->stok}} |
								Lokasi : {{$produk->lokasi}}| 
								Seller : {{$produk->seller->nama}}
						</p>
						<div class="box">
							<div class="card">
								<div class="card-body">
									<strong class="mt-5">Diskripsi Produk :</strong> <hr style="border: 1px solid #c0c0c0">
									<p>
										{!!nl2br($produk->diskripsi)!!}
									</p>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection