@extends('layout.main')
@section('title')
    Trang sản phẩm
@endsection
@section('content')
    <button class="btn btn-primary">
        <a href="{{route('?url=add-product')}}" class="text-decoration-none text-white">Add Product</a>
    </button>
    <table class="table table-hover table-bordered mt-3">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listProduct as $val)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$val->Pname}}</td>
                <td>{{number_format($val->price)}}đ</td>
                <td>{{$val->Cname}}</td>
                <td class="col-3">
                    <button class="btn btn-info">
                        <a href="{{route('?url=show-product/'.$val->Pid)}}"
                           class="text-decoration-none text-white">Show</a>
                    </button>
                    <button class="btn btn-warning">
                        <a href="{{route('?url=edit-product/'.$val->Pid)}}"
                           class="text-decoration-none text-white">Update</a>
                    </button>
                    <button class="btn btn-danger">
                        <a href="{{route('?url=delete-product/'.$val->Pid)}}"
                           onclick="return confirm('Bạn có muốn xóa không?')"
                           class="text-decoration-none text-white">Delete</a>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection