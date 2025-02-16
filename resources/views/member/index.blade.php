@extends('admin.layouts.appMember')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 style="font-size: 24px;font-weight: bold;margin-bottom: auto;">Hai, Selamat Berbelanja!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- [ Main Content ] start -->
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm" style="border-radius: 8px;">
                    <!-- Gambar -->
                    <img class="card-img-top" src="{{ asset($product->foto ?: 'image/nophoto.jpg') }}" 
                        alt="{{ $product->nama_barang }}" 
                        style="height: 200px; object-fit: cover; border-radius: 8px 8px 0 0;">
                    <div class="card-body">
                        <h5 style="margin-bottom: 5px;">{{ $product->nama_barang }}</h5>
                        <p style="margin-bottom: 5px;"><strong>Detail:</strong> {{ $product->detail_barang }}</p>
                        <p style="margin-bottom: 5px;"><strong>Kategori:</strong> {{ $product->category->name }}</p>
                        <p style="margin-bottom: 1px;"><strong>Stok:</strong> {{ $product->stok }}</p>
                    </div>
                    <div class="card-footer text-center p-1" style="background-color: #f8a9b5; color: white; font-weight: bold; font-size: 15px;">
                        <small>
                            <strong>Harga:</strong> <strong>Rp {{ number_format($product->harga, 0, ',', '.') }}</strong>
                        </small>
                    </div>                                       
                </div>
            </div>
        @endforeach
    </div>
@endsection
