<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,500&family=Poppins&display=swap');

        body {
            font-family: 'Cormorant Garamond', serif;
        }
    </style>
</head>

<body class="h-14 bg-gradient-to-r from-stone-500 to-gray-700">

    @include('component.navbar')

    @yield('container')
    
    @include('component.footer')
</body>

</html>