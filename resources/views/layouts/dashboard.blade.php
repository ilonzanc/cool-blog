<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cool Blog | Dashboard | {{ $title }}</title>
    <script src="https://kit.fontawesome.com/bcf4dcd7b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ '/css/app.css' }}">
</head>
<body>
    <x-header />
    <div class="row">
        <aside class="col-lg-3 col-xl-2">
            <nav class="container-fluid">
                <ul>
                    <li>
                        <a href="{{ route('posts.index') }}">Posts</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class="col-lg-9 col-xl-10 py-4">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </main>
    </div>
    <x-footer />
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>