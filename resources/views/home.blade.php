@extends('layouts.app')

@section('content')

<header class="bg-dark py-5">
	<div class="container px-4 px-lg-5 my-5">
		<div class="text-center text-white">
			<h1 class="display-4 fw-bolder">Shop in style</h1>
			<p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
		</div>
	</div>
</header>


<section class="py-5">
	
	<div class="container px-4 px-lg-5 mt-5">
		
		<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
			@foreach($data as $data)
			<div class="col mb-5">
				
				<div class="card h-100">
					
					<!-- Product image-->
					<img class="card-img-top" src="{{ asset('gambar/'.$data->gambar) }}" alt="rounded" />

					<span class="product-ribbon product-ribbon-right product-ribbon--style-1 bg-blue text-uppercase"><strong>{{ $data->stok }}</strong></span>
					<!-- Product details-->
					<div class="card-body p-4">
						<div class="text-center">
							<!-- Product name-->
							<p>{{ $data->jenis }}</p>
							<h5 class="fw-bolder">{{ $data->nama }}</h5>
							<p>Ukuran {{ $data->ukuran }} cm</p>
							<!-- Product price-->
							Rp. {{ number_format ($data->harga) }}
							
						</div>
					</div>
					<!-- Product actions-->
					<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
						<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ url('cart') }}/{{ $data->id }}">Beli Sekarang</a></div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
		
@endsection
