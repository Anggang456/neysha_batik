<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/mdb.min.css" />
        <link rel="stylesheet" href="css/product.css" />
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>

        </style>
    </head>
    <body class="antialiased bg-grey">
    <div class="bg-image" style="background-image: url('https://img.freepik.com/free-vector/simple-background-with-geometric-elements_1159-24836.jpg?w=740&t=st=1669436860~exp=1669437460~hmac=e092a26fcc2c2c70760774dc856acad230ae93a78f441a4fa3a0eb578460cd82');height: 100vh">
            <nav class="navbar navbar-expand-md navbar-light bg-green shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    Neysha Batik
                </a>
            </div>
        </nav>
        <footer>
        <div class="row justify-content-center p-5">
            <div class="col-md-6 mt-8">
                <div class="h-100 p-5 text-dark bg-light rounded-3 mt-8">
                  <h3 class="text-center">Batik</h3>
                  <p class="text-justify">Adalah kain Indonesia bergambar yang pembuatannya secara khusus dengan menuliskan atau menerakan malam pada kain itu, kemudian pengolahannya diproses dengan cara tertentu yang memiliki kekhasan. Sebagai keseluruhan teknik, teknologi, serta pengembangan motif dan budaya yang terkait, oleh UNESCO telah ditetapkan sebagai Warisan Kemanusiaan untuk Budaya Lisan dan Nonbendawi (Masterpieces of the Oral and Intangible Heritage of Humanity) sejak 2 Oktober 2009</p>
                  <button class="btn btn-green btn_center p-3 mt-5" type="button"><a href="{{ route('login') }}">Get Started</a></button>

                </div>
              </div>
        </div>
    </div>
    

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
                                        <a href="{{ ('login') }}" class="btn btn-primary">Beli Sekarang</a>
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
    
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript"></script>
    </body>
</html>
