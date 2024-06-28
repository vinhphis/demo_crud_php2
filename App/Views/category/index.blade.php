@extends('layout.main')
@section('title')
    Trang danh sách sản phẩm
@endsection
@section('content')
    <button class="btn btn-primary">
        <a href="{{route('?url=add-category')}}" class="text-decoration-none text-white">Add Category</a>
    </button>
    <table class="table table-hover table-bordered mt-3">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listCategory as $val)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$val->name}}</td>
                <td class="col-3">
                    <button class="btn btn-info">
                        <a href="{{route('?url=show-category/'.$val->id)}}"
                           class="text-decoration-none text-white">Show </a>
                    </button>
                    <button class="btn btn-warning">
                        <a href="{{route('?url=edit-category/'.$val->id)}}"
                           class="text-decoration-none text-white">Update </a>
                    </button>
                    <button class="btn btn-danger">
                        <a href="{{route('?url=delete-category/'.$val->id)}}"
                           onclick="return confirm('Bạn có muốn xóa không?')"
                           class="text-decoration-none text-white">Delete </a>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection