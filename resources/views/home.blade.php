@extends('layouts.app')

@section('content')
<div class="container-xl">
	<div class="container">
		<div class="col-md-12">
			<h2 class="text-dark">Featured <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg"  class="img-fluid" alt="">									
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike></strike> <b>Rp 100.000</b></p>
									<a href="{{ ('cart') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike></strike> <b>Rp 23.99</b></p>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike></strike> <b>Rp 649.00</b></p>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Nikon">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike></strike> <b>Rp 250.00</b></p>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Play Station">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp 269.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp 869.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Speaker">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp 99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Galaxy">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp 569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="iPhone">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp 349.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Canon">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp 250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Pixel">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp 418.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								
								<div class="img-box">
									<img src="https://dynamic.zacdn.com/KREZERl1z80woKoEThxqRaCNTuM=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/batik-parisya-8884-3904033-1.jpg" class="img-fluid" alt="Watch">
								</div>
								<div class="thumb-content">
									<h4>Baju Batik</h4>
									<p class="item-price"><strike></strike> <span>Rp330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>

<section class="section-products">
	<div class="container">
			<div class="row justify-content-center text-center">
					<div class="col-md-8 col-lg-6">
							<div class="header">
									<h2>Popular Products</h2>
							</div>
					</div>
			</div>
			<div class="row">
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-1" class="single-product">
									<div class="part-1">
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-old-price">$79.99</h4>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-2" class="single-product">
									<div class="part-1">
											<span class="discount">15% off</span>
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-3" class="single-product">
									<div class="part-1">
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-old-price">$79.99</h4>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-4" class="single-product">
									<div class="part-1">
											<span class="new">new</span>
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-1" class="single-product">
									<div class="part-1">
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-old-price">$79.99</h4>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-2" class="single-product">
									<div class="part-1">
											<span class="discount">15% off</span>
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-3" class="single-product">
									<div class="part-1">
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-old-price">$79.99</h4>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
					<!-- Single Product -->
					<div class="col-md-6 col-lg-4 col-xl-3">
							<div id="product-4" class="single-product">
									<div class="part-1">
											<span class="new">new</span>
											<ul>
													<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
													<li><a href="#"><i class="fas fa-heart"></i></a></li>
													<li><a href="#"><i class="fas fa-plus"></i></a></li>
													<li><a href="#"><i class="fas fa-expand"></i></a></li>
											</ul>
									</div>
									<div class="part-2">
											<h3 class="product-title">Here Product Title</h3>
											<h4 class="product-price">$49.99</h4>
									</div>
							</div>
					</div>
			</div>
	</div>
</section>

@endsection
