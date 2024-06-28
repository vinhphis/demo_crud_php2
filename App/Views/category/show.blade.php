@extends('layout.main')
@section('title')
    Trang chi tiết danh mục sản phẩm
@endsection
@section('content')
    <form class="mt-3" action="#">
        <div class="mb-3">
            <label for="name-category" class="form-label">Name Category</label>
            <input type="text" class="form-control" id="name-category" name="name" value="{{ $listCategory->name }}"
                readonly>
        </div>
        <div class="text-center">
            <button class="btn btn-primary">
                <a href="{{ route('?url=list-category') }}" class="text-decoration-none text-white">Home Back</a>
            </button>
        </div>
    </form>
@endsection
