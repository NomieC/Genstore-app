<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" >

    {{-- script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>

</head>
<body>
    @include('navbar')
    
    <section id="table-menu">
<!-- resources/views/menus/index.blade.php -->

<div class="menu-container card-menu">
    @foreach ($menus as $menu)
        <div class="card">
            <img class="card-image" src="{{ asset('assets/Foods/' . $menu->menu_image) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $menu->menu_name }}</h5>
                <p class="card-text">{{ $menu->menu_desc }}</p>
                <p class="card-text"><strong>Type:</strong> {{ $menu->menu_type }}</p>
                <p class="card-text"><strong>Category:</strong> {{ $menu->menu_category }}</p>
                <p class="card-text"><strong>Price:</strong> {{ $menu->menu_price }}</p>
                <p class="card-text"><strong>path:</strong> {{ $menu->menu_image }}</p>
            </div>
        </div>
    @endforeach
</div>


    </section>

</body>
</html>