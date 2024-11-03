<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My App')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <a class="navbar-brand" href="/">My App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('folders.index') }}">Folders</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('notes.index') }}">Notes</a></li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
