<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
 
    <title>Laravel</title>
</head>
<body>
    <header>
        <div class="brand">Laravel site</div>
    </header>
    <main>
    {{ $slot }}
    </main>
    <footer>
        &copy; {{ date('Y') }} - Arteveldehogeschool
    </footer>
</body>
</html>