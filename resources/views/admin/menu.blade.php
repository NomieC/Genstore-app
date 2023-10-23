<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" >

    {{-- script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{asset('js/home.js')}}"></script>

</head>
<body>
    <section id="menu-header">
        <div class="menu-header-container">
            <div class="menu-slider-title"><h1>Menus</h1></div>
            <div class="menu-slider-container">
              <div class="menu-slide"><img src="{{asset('assets/menu1.jpg')}}" alt=""></div>
              <div class="menu-slide"><img src="{{asset('assets/menu2.jpg')}}" alt=""></div>
              <div class="menu-slide"><img src="{{asset('assets/menu3.jpg')}}" alt=""></div>
              <div class="menu-slide"><img src="{{asset('assets/menu4.jpg')}}" alt=""></div>
              <div class="menu-slide"><img src="{{asset('assets/menu5.jpg')}}" alt=""></div>
            </div>
          </div>
    </section>
    
    @include('navbar')

    <section id="table-menu">
        <div class="filter-container">
            <div class="filter-list">
                <li class="{{ request('category') ? '' : 'active' }}"><a href="{{ route('menu', ['category' => '']) }}" class="filter-button">All</a></li> 
                <li class="{{ request('category') === 'A la carte' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'A la carte']) }}" class="filter-button">A la carte</a></li> 
                <li class="{{ request('category') === 'Side Dish' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Side Dish']) }}" class="filter-button">Side Dish</a></li> 
                <li class="{{ request('category') === 'Desserts' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Desserts']) }}" class="filter-button">Desserts</a></li> 
                <li class="{{ request('category') === 'Snacks & Side Dishes' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Snacks & Side Dishes']) }}" class="filter-button">Snacks & Side Dishes</a></li> 
                <li class="{{ request('category') === 'Starters & Small Plates' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Starters & Small Plates']) }}" class="filter-button">Starters & Small Plates</a></li> 
                <li class="{{ request('category') === 'Salads' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Salads']) }}" class="filter-button">Salads</a></li> 
                <li class="{{ request('category') === 'Mains' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Mains']) }}" class="filter-button">Mains</a></li> 
                <li class="{{ request('category') === 'Grills' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Grills']) }}" class="filter-button">Grills</a></li> 
                <li class="{{ request('category') === 'Package' ? 'active' : '' }}"><a href="{{ route('menu', ['category' => 'Package']) }}" class="filter-button">Packages</a></li> 
                <li class="{{ request('type') === 'Wine' ? 'active' : '' }}"><a href="{{ route('menu', ['type' => 'Wine']) }}" class="filter-button">Wine</a></li> 
            </div>
        </div>
                
        <div class="menu-container card-menu">
            <div class="card-container">
                    @foreach ($menus as $menu)
                    <a href="#!" class="card" data-aos="fade-up">
                        <img class="front" src="{{ asset('assets/Foods/' . $menu->menu_image) }}" alt="">
                        <div class="back">
                            <div>
                                <p class="card-category">{{ $menu->menu_category }}</p>
                                <h5 class="card-title">{{ $menu->menu_name }}</h5>
                                <p class="card-desc">{{ $menu->menu_desc }}</p>
                                <p class="card-price">£{{ $menu->menu_price }}</p>
                                <div class="crud-button">
                                <form action="admin/edit/{{ $menu->id }}">
                                    <button class="card-button">Edit</button>
                                </form>
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="card-button">Delete</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </a>
                    @endforeach 
                </div>
        </div>

        <form action="admin/add" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="add-button">Add</button>
        </form>
            
    </section>   
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 500,
        });
    </script>
</body>
</html>