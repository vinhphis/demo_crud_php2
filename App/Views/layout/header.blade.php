@php
    $key = [
        [
            'name' => 'Category',
            'route' => '?url=list-category',
        ],
        [
            'name' => 'Product',
            'route' => '?url=list-product',
        ],
    ];
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                @foreach ($key as $item)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route($item['route']) }}">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
