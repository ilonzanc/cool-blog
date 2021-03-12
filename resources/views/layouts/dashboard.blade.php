<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cool Blog | Dashboard | {{ $title }}</title>
    <link rel="stylesheet" href="{{ '/css/app.css' }}">
</head>
<body>
    @include('components.header')
    <div class="row">
        <aside class="col-lg-3">
            <nav>
                <ul>
                    <li>
                        <a href="/posts">Posts</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="col-lg-9">
            @yield('content')
        </main>
    </div>
    @include('components.footer')
</body>
</html>