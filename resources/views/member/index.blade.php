@extends('admin.layouts.app')
@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 style="font-size: 24px;font-weight: bold;margin-bottom: auto;">Data Barang</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Detail Barang</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Foto</th>
                                    <th>Stok</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>
                                            <h6>{{ $loop->iteration }}</h6>
                                        </td>
                                        <td>{{ $product->nama_barang }}</td>
                                        <td>{{ $product->detail_barang }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->harga }}</td>
                                        <td>
                                            @empty($product->foto)
                                            <img src="{{ asset('image/nophoto.jpg') }}" alt="project-image" class="rounded"
                                                style="width: 100%; max-width: 100px; height: auto;">
                                        @else
                                            <img src="{{ asset($product->foto) }}" alt="project-image" class="rounded"
                                                style="width: 100%; max-width: 100px; height: auto;">
                                        @endempty
                                        </td>
                                        <td>{{ $product->stok }}</td>
                                        <td class="d-flex justify-content-end">
                                            <div class="pr-2">
                                                <a href="{{ route('product.edit',['product'=>$product->id]) }}" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                                    Edit
                                                </a>
                                            </div>
                                            <form class="mt-n1"
                                                action="{{ route('product.destroy', ['product' => $product->id]) }}"
                                                method="POST" style="margin-top: 10px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    style="background-color: #fb0000; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection