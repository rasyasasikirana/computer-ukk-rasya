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
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card-deck">
                @foreach ($products as $product)
                    <div class="card" style="width: 18rem;">
                        <img class="img-fluid card-img-top" src="{{ asset($product->foto ?: 'image/nophoto.jpg') }}" alt="{{ $product->nama_barang }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nama_barang }}</h5>
                            <p style="margin-bottom: 8px;"><strong>Detail:</strong> {{ $product->detail_barang }}</p>
                            <p style="margin-bottom: 8px;"><strong>Kategori:</strong> {{ $product->category->name }}</p>
                            <p style="margin-bottom: 8px;"><strong>Stok:</strong> {{ $product->stok }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted" style="color: #009d1c !important; font-weight: bold !important; font-weight: bold; font-size: 14px"><strong>Harga:</strong> Rp {{ number_format($product->harga, 0, ',', '.') }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
