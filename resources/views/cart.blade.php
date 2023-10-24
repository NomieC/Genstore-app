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

                @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                <div class="cart-item">
                    <div class="collapsible">
                        <div class="name-row">
                            <h3>{{ $details['name'] }}</h3>    
                            <div class="quantity-controls" data-price="{{ $details['price'] }}" data-id="{{ $id }}">
                                <button class="quantity-btn minus">-</button>
                                <span class="quantity" style="font-size: 22px">1</span>
                                <button class="quantity-btn plus">+</button>
                            </div>
                        </div>
                        <div class="price-row">
                            <p class="cart-price">£{{ $details['price'] }}</p>
                            <hr>
                        </div>
                    </div>
                    <div class="collapsible-content">
                        <p>{{ $details['type'] }}</p>
                        <p>{{ $details['category'] }}</p>
                        <p>{{ $details['description'] }}</p>
                        <img class="cart-image" src="{{ asset('assets/Foods/' . $details['image']) }}" alt="{{ $details['name'] }}">
                    </div>
                    <?php?>
                </div>
                
                @endforeach
                @endif
                <p id="total-price" class="total-price"></p>


            </div>      
        </div>

        <div class="cart-button-container">
            <form action="menu" method="get" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="cart-button">Return to Menu</button>
            </form>        
            <form action="{{ route('cart.clear') }}" method="get" enctype="multipart/form-data">
                @csrf
                <button type="submit" class="cart-button">I Will Have Order</button>
            </form>        
        </div>
            
    </section>   
    
    <script>
        $(document).ready(function() {
            // Function to calculate total price and update UI
            function updateTotal() {
                let totalPrice = 0;
                $('.cart-item').each(function() {
                    const quantity = parseInt($(this).find('.quantity').text());
                    const price = parseFloat($(this).find('.quantity-controls').data('price'));
                    totalPrice += quantity * price;
                });
                // Update total price UI
                document.getElementById('total-price').textContent = `Total Price: £${totalPrice.toFixed(2)}`;
                return totalPrice; // Return total price for further use if needed
            }

            // Event listener for quantity buttons
            $('.quantity-btn').on('click', function() {
                const operation = $(this).hasClass('minus') ? -1 : 1;
                const quantityElement = $(this).siblings('.quantity');
                let quantity = parseInt(quantityElement.text()) + operation;
                // Ensure quantity is at least 0 and at most 99 (or any other limit you want)
                quantity = Math.min(Math.max(quantity, 0), 99);

                // Get the cart item ID from the data attribute
                const cartItemId = $(this).closest('.quantity-controls').data('id');

                // Update the cart item quantity in the UI
                quantityElement.text(quantity);

                // Update total price and remove the item if quantity is zero
                const totalPrice = updateTotal();

                // Perform an AJAX request to update the cart item quantity on the server-side
                $.ajax({
                    url: `/cart/update/${cartItemId}`, // Adjust the URL according to your route definition
                    method: 'POST',
                    data: {
                        quantity: quantity,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        // Handle the response if needed
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            // Event listener for showing/hiding cart item details
            $('.price-row').click(function() {
                $(this).closest('.cart-item').toggleClass('active');
                $(this).closest('.cart-item').find('.collapsible-content').slideToggle();
            });

            // Initial total update
            updateTotal();
        });



    </script>
</body>
</html>