<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>CREATE DATA</h2>
                </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis  :</strong>
                    <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis Batik">
                    @error('jenis')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama :</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Batik">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ukuran :</strong>
                        <input type="number" name="ukuran" class="form-control" placeholder="Masukkan Ukuran Batik">
                            @error('ukuran')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok :</strong>
                        <input type="number" name="stok" class="form-control" placeholder="Masukkan Jumlah Stok">
                            @error('stok')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga :</strong>
                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Jumlah Harga">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        </div>
                        <input type="file" name="gambar" class="form-control" placeholder="Masukkan Gambar Batik">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <br>
                    </div> 
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
                <a class="btn btn-warning" href="{{ route('produk.index') }}"> Back</a>
            </div>
        </form>
    </body>
</html>