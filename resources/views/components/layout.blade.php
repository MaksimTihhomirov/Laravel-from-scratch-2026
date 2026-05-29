@props(['title' => 'Laracasts'])

<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <a href="/ideas" class="btn btn-ghost text-xl">Idea</a>
        </div>

        <div class="navbar-center">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/ideas">Home</a></li>
                <li><a href="/ideas/create">New Idea</a></li>
            </ul>
        </div>

        <div class="navbar-end">
            <a class="btn">Register</a>
        </div>
    </div>

    <main class="p-6 max-w-xl mx-auto">
        {{ $slot }}
    </main>
</body>
</html>