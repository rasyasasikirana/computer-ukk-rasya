@extends('admin.layouts.app')
@section('content')
   <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 style="font-size: 24px;font-weight: bold;margin-bottom: auto;">Tambah Kategori</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="card">
            <div class="card-header">
                <h5>Tambah Kategori</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Kategori</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        
@endsection