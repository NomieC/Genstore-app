<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Menu</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" >

    {{-- script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{asset('js/home.js')}}"></script>

</head>
<body>
    @include('navbar')
    <section id="table-menu">
        <div class="filter-container">
            <div class="filter-list">
                <li><a href="{{ route('menu', ['category' => '']) }}" class="filter-button">All</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Side Dish']) }}" class="filter-button">Side Dish</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Desserts']) }}" class="filter-button">Desserts</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Snacks & Side Dishes']) }}" class="filter-button">Snacks & Side Dishes</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Starters & Small Plates']) }}" class="filter-button">Starters & Small Plates</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Salads']) }}" class="filter-button">Salads</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Mains']) }}" class="filter-button">Mains</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Grills']) }}" class="filter-button">Grills</a></li> 
                <li><a href="{{ route('menu', ['category' => 'Package']) }}" class="filter-button">Packages</a></li> 
                <li><a href="{{ route('menu', ['type' => 'Wine']) }}" class="filter-button">Wine</a></li> 
            </div>
        </div>
        
        <div class="menu-container card-menu">
            <div class="card-container">
                    @foreach ($menus as $menu)
                    <a href="#!" class="card">
                        <img class="front" src="{{ asset('assets/Foods/' . $menu->menu_image) }}" alt="">
                        <div class="back">
                            <div>
                                <p class="card-category">{{ $menu->menu_category }}</p>
                                <h5 class="card-title">{{ $menu->menu_name }}</h5>
                                <p class="card-desc">{{ $menu->menu_desc }}</p>
                                <p class="card-price">£{{ $menu->menu_price }}</p>
                                <div class="crud-button">
                                
                                    <form action="{{ route('cart.add', ['id' => $menu->id]) }}" method="POST">
                                        @csrf
                                        <button class="card-button" type="submit">Add to Cart</button>
                                    </form>
                                    
                                
                                
                                    <button class="card-button">Remove From Cart</button>
                                
                            </div>
                            </div>
                        </div>
                    </a>
                    @endforeach 
                </div>
            </div>
        </div>
    </section>   
    
</body>
</html>