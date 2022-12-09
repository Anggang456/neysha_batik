<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>CRUD</title>
 <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
    <h2><strong>EDIT DATA</strong></h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">Jenis</label>
                            <input type="text" class="form-control" name="jenis" value="{{ old('jenis', $produk->jenis) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Masukkan Nama" value="{{ old('nama', $produk->nama) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Ukuran</label>
                            <input name="ukuran" type="text" class="form-control" placeholder="Masukkan Ukuran" value="{{ old('ukuran', $produk->ukuran) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah Stok</label>
                            <input name="stok" type="text" class="form-control" placeholder="Masukkan Jumlah Stok" value="{{ old('stok', $produk->stok) }}">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Harga</label>
                            <input name="harga" type="text" class="form-control" placeholder="Masukkan Jumlah Harga" value="{{ old('harga', $produk->harga) }}">
                        </div>
                        <div>
                
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        <button type="back" class="btn btn-md btn-danger " href="/produk">BACK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>