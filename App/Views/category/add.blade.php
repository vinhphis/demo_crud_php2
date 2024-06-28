@extends('layout.main')
@section('title')
    Trang thêm danh mục sản phẩm
@endsection
@section('content')
    <form class="mt-3" method="post" action="{{route('?url=add-category')}}">
        <div class="mb-3">
            <label for="name-category" class="form-label">Name Category</label>
            <input type="text" class="form-control" id="name-category" name="name">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection