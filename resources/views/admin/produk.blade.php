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
                <div class="card-header">
                    <h5>Category</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <a href="{{ route('product.create') }}"
                                style="background-color: #FF2171; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                Tambah
                            </a>
                        </div>
                    </div>
                </div>
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
                                        <td>{{ Str::limit($product->detail_barang, 40, '...') }}</td>
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
                                                <a href="{{ route('product.edit',['product'=> $product->id]) }}" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                                    Edit
                                                </a>
                                            </div>
                                            <form class="mt-n1 delete-form"
                                            action="{{ route('product.destroy', ['product' => $product->id]) }}"
                                            method="POST" style="margin-top: 10px;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete(this)" data-id="{{ $product->id }}" class="delete-btn"
                                                style="background-color: #fb0000; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                                Hapus
                                            </button>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function confirmDelete(button) {
                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Data yang dihapus tidak bisa dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, Hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Ambil form terdekat dan submit
                        button.closest("form").submit();
                    }
                });
            }
        </script>
@endsection