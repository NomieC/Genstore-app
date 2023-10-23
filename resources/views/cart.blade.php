<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Cart</title>

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
        <div class="menu-container card-menu">
            <div class="card-container">
                @foreach ($cartItems as $item)
                    <div class="cart-item">
                        <h3>{{ $item['name'] }}</h3>
                        <p>Price: £{{ $item['price'] }}</p>
                        <p>Type: {{ $item['type'] }}</p>
                        <p>Category: {{ $item['category'] }}</p>
                        <p>Description: {{ $item['description'] }}</p>
                        <img src="{{ asset('assets/Foods/' . $item['image']) }}" alt="{{ $item['name'] }}">
                    </div>
                @endforeach


            </div>        
        </div>

        <form action="{{ route('cart.clear') }}" method="get" enctype="multipart/form-data">
            @csrf
            <button type="submit" class="add-button">I Will Have Order</button>
        </form>        
            
    </section>   
    
</body>
</html>