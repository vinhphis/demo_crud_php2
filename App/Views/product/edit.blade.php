@extends('layout.main')
@section('title')
    Trang cập nhật sản phẩm
@endsection
@section('content')
    <form class="mt-3" method="post" action="{{route('?url=update-product')}}">
        <div class="mb-3">
            <label for="name-category" class="form-label">Name Product</label>
            <input type="text" class="form-control" id="name-category" name="name" value="{{$listProduct->Pname}}">
            <input type="hidden" class="form-control" id="name-category" name="id" value="{{$listProduct->Pid}}">
        </div>
        <div class="mb-3">
            <label for="name-category" class="form-label">Price Product</label>
            <input type="text" class="form-control" id="name-category" name="price" value="{{$listProduct->price}}">
        </div>
        <div class="mb-3">
            <label for="name-category" class="form-label">Category</label>
            <select class="form-select" name="category" id="category">
                <option hidden="hidden">--Choose one option--</option>
                @foreach($listCategory as $val)
                    <option value="{{$val->id}}"
                            @selected($val->id == $listProduct->Cid)
                    >{{$val->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection