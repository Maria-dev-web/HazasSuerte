<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
</body>

<footer>
    <p>Las Hazas de la Suerte - María Roldán Rincón - 2025</p>
</footer>
</html>