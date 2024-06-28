@extends('layout.main')
@section('title')
    Trang thêm sanh mục sản phẩm
@endsection
@section('content')
    <form class="mt-3" method="post" action="{{route('?url=update-category')}}">
        <div class="mb-3">
            <label for="name-category" class="form-label">Name Category</label>
            <input type="text" class="form-control" id="name-category" name="name" value="{{$listCategory->name}}">
            <input type="hidden" class="form-control" id="name-category" name="id" value="{{$listCategory->id}}">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection