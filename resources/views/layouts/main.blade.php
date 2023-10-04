<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-14 bg-gradient-to-r from-stone-500 to-gray-700">
    
    @include('component.navbar')
    
    <div>
        @yield('container')
    </div>
</body>
</html>