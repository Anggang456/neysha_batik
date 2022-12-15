@extends('layouts.app')

@section('content')
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="{{ url('gambar') }}/{{ $data->gambar }}" alt="rounded" />
                    </div>
                    <div class="col-md-6">
                        <h4>{{ $data->jenis }}</h4>
                        <h1 class="display-5 fw-bolder">{{ $data->nama }}</h1>
                        <h6>ukuran {{ $data->ukuran }} cm</h6>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">Rp. {{ number_format ($data->harga) }}</span>
                        </div>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="{{ $data->stok }}" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                 Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($item as $data)
                    <div class="col mb-5">
                        
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <!---<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            -->
                            <img class="card-img-top" src="{{ url('gambar') }}/{{ $data->gambar }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h6 class="fw-bolder">{{ $data->jenis }}</h6>
                                    <h5 class="fw-bolder">{{ $data->nama }}</h5>
                                    <p>Ukuran {{ $data->ukuran }} cm</p>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rp. {{ number_format ($data->harga) }}</span>
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
  
@endsection
