<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer rel="stylesheet" src="{{asset('js/app.js ')}}"></script>

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <ul class="nav d-flex flex-row justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('hobby.index')}}">Hobbies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('pet.index')}}">Pets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('about.index')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('contact.index')}}">Contact</a>
            </li>
            @can('view', auth()->user())
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('admin.index')}}">Admin</a>
            </li>
            @endcan
        </ul>
    </div>
    <div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
</html>

