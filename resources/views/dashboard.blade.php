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
                    <a href="#!" class="card">
                        <img class="front" src="{{ asset('assets/Foods/' . $menu->menu_image) }}" alt="">
                        <div class="back">
                            <div>
                                <p class="card-category">{{ $menu->menu_category }}</p>
                                <h5 class="card-title">{{ $menu->menu_name }}</h5>
                                <p class="card-desc">{{ $menu->menu_desc }}</p>
                                <p class="card-price">£{{ $menu->menu_price }}</p>
                                <div class="cart-button-box">
                                
                                    <form action="{{route('cart.add', ['id' => $menu->id]) }}" method="post">
                                    @csrf
                                    <button class="cart-button" type="submit">Add to Cart</button>
                                    </form>
                                
                                    <button class="cart-button" style="display: none">Remove From Cart</button>
                                
                            </div>
                            </div>
                        </div>
                    </a>
                    @endforeach 
                </div>
            </div>
            <form action="cart" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="add-button">Order</button>
            </form>
        </div>
    </section>   
    
    <script>
        $(document).ready(function() {
    // Event listener for adding items to cart
    $('.add-to-cart-button').on('click', function(event) {
        event.preventDefault();

        var menuId = $(this).data('id'); // Get the menu ID from the clicked button
        var addButton = $(this);
        var removeButton = addButton.siblings('.cart-button');
        var quantityControls = addButton.siblings('.quantity-controls');
        var quantitySpan = quantityControls.find('.quantity');

        // Extract menu details from the card
        var menuName = addButton.closest('.card').find('.card-title').text();
        var menuPrice = parseFloat(addButton.closest('.card').find('.card-price').text().replace('£', ''));

        // Add item to cart
        $.ajax({
            url: "{{ route('cart.add', ['id' => $menu->id]) }}",
            method: "POST",
            data: {
                id: menuId,
                name: menuName,
                price: menuPrice,
                quantity: 1, // Initial quantity is set to 1
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                // Update UI after adding item to cart
                addButton.remove();
                removeButton.show();
                quantityControls.show();
                quantitySpan.text('1'); // Initial quantity is set to 1
            },
            error: function(error) {
                console.error(error);
            }
        });
    });

        // Event listener for quantity buttons
        $('.quantity-btn').on('click', function() {
            var quantitySpan = $(this).siblings('.quantity');
            var currentQuantity = parseInt(quantitySpan.text());
            if ($(this).hasClass('minus')) {
                currentQuantity = Math.max(currentQuantity - 1, 1);
            } else {
                currentQuantity += 1;
            }
            quantitySpan.text(currentQuantity);
        });
    });

    </script>
</body>
</html>