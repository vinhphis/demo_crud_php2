<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>
</head>

<body>
<div class="container">
    <header class="mb-3">
       @include('layout.header')
    </header>
    <section class="content">
        @if( $_SESSION)
            <h2>{{$_SESSION['success']}}</h2>
            @php(session_destroy())
        @endif
        @yield('content')
    </section>
    <footer class="text-center">
        <span>FPT POLYTECHNIC</span>
    </footer>
</div>
</body>

</html>
