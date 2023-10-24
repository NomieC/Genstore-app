<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <nav id="navbar">
        <h1 class="logo">
            <a href="/" id="logo-link"><img src="{{asset("assets/crop-logo.png")}}" style="width: 300px" alt="Logo"></a>
        </h1>
        
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/#about-us">About Maison</a>
            <a href="/hours-location">Hours & Location</a>
            <div class="dropdown">
                <form action="menu">
                    <button class="dropbtn">Menus</button>
                </form>
                <div class="dropdown-content">
                    <a href="">Dining</a>
                    <a href="">Grill</a>
                    <a href="">Afternoon Tea</a>
                    <a href="">Bar</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Events</button>
                <div class="dropdown-content">
                    <a href="">Christmas</a>
                    <a href="">Valentine</a>
                    <a href="">Sunday Lunch</a>
                </div>
            </div>
            <a href="/cart">Book Now</a>
            <div >
                @if (Route::has('login'))
                <div >
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        class="btn-sign-up">
                            Log Out
                        </a>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-sign-up">Log in</a>
            
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-sign-up">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById("navbar");
        var fixed = navbar.offsetTop;

        function updateNavbar() {
            if (window.pageYOffset >= fixed) {
                navbar.classList.add("fixed");
            } else {
                navbar.classList.remove("fixed");
            }
        }

        window.addEventListener("scroll", updateNavbar);
    });

    </script>
</body>
</html>