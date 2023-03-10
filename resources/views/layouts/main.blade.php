<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
                        <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                        <a class="nav-link" href="{{route('contact.index')}}">Contact</a>
                        <a class="nav-link" href="{{route('about.index')}}">About</a>
                        <a class="nav-link" href="{{ route('wither.index') }}">Withers</a>
                        <a class="nav-link" href="{{ route('book.index') }}">Books</a>
                        @can('view', auth()->user())
                            <a class="nav-link" href="{{ route('admin.post.index') }}">Admin</a>
                        @endcan
                    </div>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
</div>

<script src="/bootstrap/bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</body>
</html>
