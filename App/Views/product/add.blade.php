@extends('layout.main')
@section('title')
    Trang thêm sản phẩm
@endsection
@section('content')
    <form class="mt-3" method="post" action="{{route('?url=add-product')}}">
        <div class="mb-3">
            <label for="name-product" class="form-label">Name Product</label>
            <input type="text" class="form-control" id="name-product" name="name">
        </div>
        <div class="mb-3">
            <label for="price-product" class="form-label">Price Product</label>
            <input type="number" class="form-control" id="price-product" name="price">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category" id="category">
                <option hidden="hidden">--Choose one option--</option>
                @foreach($listCategory as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection