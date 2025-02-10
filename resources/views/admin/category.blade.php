@extends('admin.layouts.app')
@section('content')
   <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
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
                                <a href="{{ route('categories.create') }}" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                    Tambah Kategori
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
                                        <th>Nama Kategori</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                        <td>
                                            <h6>{{ $loop->iteration }}</h6>
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td class="d-flex justify-content-end">
                                            <div>
                                            <a href="{{ route('categories.edit',['category'=>$category->id]) }}" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                                Edit
                                            </a>
                                            </div>
                                            <form class="mt-n1" action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST" style="margin-top: 10px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Hapus</button>
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