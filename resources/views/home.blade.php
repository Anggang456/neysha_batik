@extends('layouts.app')

@section('content')



<div class="container mt-5">
	<div class="row">
		@foreach($item as $item)
		<div class="col-md-3">
				<div class="cards">
					<div class="image-container">
						<div class="first">
							<div class="d-flex justify-content-between align-items-center">
							<span class="discount">-25%</span>
							<span class="wishlist"><i class="fa fa-heart-o"></i></span>
							</div>
						</div>
						
						<img src="{{ url('gambar') }}/{{ $item->gambar }}" class="img-fluid rounded thumbnail-image">
						
					</div>
					<div class="product-detail-container p-2">
							<div class="d-flex justify-content-between align-items-center">
								<h5 class="dress-name">{{ $item->nama }}</h5>
								<div class="d-flex flex-column mb-2">
									<small class="old-price text-right">Rp {{ $item->harga }}</small>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center pt-1">
								<div class="color-select d-flex ">

									<input type="button" name="grey" class="btnup creme">
									<input type="button" name="red" class="btnup red ml-2">
									<input type="button" name="blue" class="btnup blue ml-2">
								</div>
								<div class="d-flex ">
									<span class="item-size mr-2 btnup" type="button">S</span>
									<span class="item-size mr-2 btnup" type="button">M</span>
									<span class="item-size btnup" type="button">L</span>
								</div>
							</div>
							<div class="d-flex justify-content-between align-items-center pt-1">
								<div>
									<i class="fa fa-star-o rating-star"></i>
									<span class="rating-number">4.8</span>
								</div>
								
							</div>	
						</div>
					</div>
				</div>
				@endforeach



<div class="container-fluid mt-3 mb-3">
    <div class="row g-2">
		@foreach($data as $data)
		<div class="col-md-4">
			<div class="card">
				<div class="img-container">
					<div class="d-flex justify-content-between align-items-center p-2 first"> 
						<span class="percent">-15%</span> 
					</div>
					 <img src="{{ url('gambar') }}/{{ $data->gambar }}" class="img-fluid">
				</div>
				<div class="product-detail-container">
					<div class="d-flex justify-content-between align-items-center">
						<h6 class="mb-0">{{ $data->jenis }}</h6>
						<span class="text-danger font-weight-bold">Rp {{ $data->harga }}</span>
					</div>
					<div class="d-flex justify-content-between align-items-center mt-2">
						<div class="ratings"><span>{{ $data->nama }}</span> 
						</div>
						<div class="size"> <label class="radio"> <input type="radio" name="size2" value="small"> <span>{{ $data->stok }}</span> </label> </div>
					</div>
					<div class="mt-3"> 
						<a class="btn button-green btn-block" href="{{ ('home/cart') }}" >Beli Sekarang</a> 
					</div>
				</div>
			</div>
		</div>
		@endforeach
		
@endsection
