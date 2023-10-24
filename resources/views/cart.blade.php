<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Cart</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" > --}}
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet" type="text/css" >

    {{-- script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{asset('js/home.js')}}"></script>

</head>
<body>
    @include('navbar')
    <section id="cart-table">
        <div class="cart-menu-container">
            <div class="cart-container">
                @foreach ($cartItems as $item)
                <div class="cart-item">
                    <div class="collapsible">
                        <div class="name-row">
                            <h3>{{ $item['name'] }}</h3>
                            <div class="quantity-controls">
                                <button class="quantity-btn minus">-</button>
                                <span class="quantity" style="font-size: 22px">1</span>
                                <button class="quantity-btn plus">+</button>
                            </div>
                        </div>
                        <div class="price-row">
                            <p class="cart-price">£{{ $item['price'] }}</p>
                            <hr>
                        </div>
                    </div>
                    <div class="collapsible-content">
                        <p>{{ $item['type'] }}</p>
                        <p>{{ $item['category'] }}</p>
                        <p>{{ $item['description'] }}</p>
                        {{-- <img src="{{ asset('assets/Foods/' . $item['image']) }}" alt="{{ $item['name'] }}"> --}}
                    </div>
                </div>
                
                @endforeach


            </div>        
        </div>

        <form action="{{ route('cart.clear') }}" method="get" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="add-button">I Will Have Order</button>
        </form>        
            
    </section>   
    
    <script>
        $(document).ready(function() {
            $('.price-row').click(function() {
                $(this).closest('.cart-item').toggleClass('active');
                $(this).closest('.cart-item').find('.collapsible-content').slideToggle();
            });
        });

    </script>
</body>
</html>