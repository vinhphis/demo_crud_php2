@extends('layout.main')
@section('title')
    Trang chi tiết sản phẩm
@endsection
@section('content')
    <form class="mt-3" action="#">
        <div class="mb-3">
            <label for="name-product" class="form-label">Name Product</label>
            <input type="text" class="form-control" id="name-product" name="name" readonly value="{{$listProduct->name}}">
        </div>
        <div class="mb-3">
            <label for="price-product" class="form-label">Price Product</label>
            <input type="number" class="form-control" id="price-product" name="price" readonly value="{{$listProduct->price}}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category" id="category" disabled>
                <option hidden="hidden">--Choose one option--</option>
                @foreach($listCategory as $val)
                    <option value="{{$val->id}}"
                            @selected($val->id==$listProduct->id)
                    >{{$val->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button class="btn btn-primary">
                <a href="{{route('?url=list-product')}}" class="text-decoration-none text-white">Home Back</a>
            </button>
        </div>
    </form>
@endsection