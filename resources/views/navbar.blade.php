<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <style>
        @media only screen and (max-width: 800px) {
            .logo {
                margin:auto !important;
            }

            .nav-links {
                display: none;
            }

            .nav-links.show {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #navbar {
                display: flex;
                flex-direction: column;
            }

            .barsIcon {
                display: block;
                margin-left: auto;
            }

            .xmarkIcon {
                display: none;
            }

            .logButton {
                display: none;
                margin: 40px auto 30px !important;
            }
        }

        @media only screen and (min-width: 801px) {
            .barsIcon {
                display: none !important;
            }
            .xmarkIcon {
                display: none !important;
            }

            .nav-links {
                display: flex !important;
                justify-content: space-between;
                align-items: center;
            }

            #navbar {
                display: flex !important;
                justify-content: space-between;
                align-items: center;
            }

            .logButton {
                display: flex !important;
            }
        }

        

    </style>
</head>
<body>
    <nav id="navbar">
        <h1 class="logo">
            <a href="/" id="logo-link"><img src="{{asset("assets/crop-logo.png")}}" style="width: 300px" alt="Logo"></a>
        </h1>
        
        <div class="nav-links" id="navLinks">
            <a href="/">Home</a>
            <a href="/#about-us">About Maison</a>
            <a href="/hnl">Hours & Location</a>
            <div class="dropdown">
                <form action="admin">
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
            </div>
        </div>

        
        <div id="logoutButton" class="logButton">
            @if (Route::has('login'))
            <div>
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

        <a href="#" class="barsIcon" onclick="toggleNav()">
            <img src="{{asset('assets/icon.png')}}" style="width: 40px;" alt="Bars Icon">
        </a>

        <img src="{{asset('../assets/xmark.png')}}" style="width: 40px;" class="xmarkIcon" onclick="toggleNav()">
        
    </nav>

    <script>
        function toggleNav() {
            var navLinks = document.getElementById("navLinks");
            var barsIcon = document.querySelector('.barsIcon');
            var xMarkIcon = document.querySelector('.xmarkIcon');
            var logoutButton = document.getElementById('logoutButton');

            if (navLinks.style.display === "none" || navLinks.style.display === "") {
                navLinks.style.display = "flex";
                navLinks.classList.add('show');
                barsIcon.style.display = 'none';
                xMarkIcon.style.display = 'block';
                logoutButton.style.display = 'block';
            } else {
                navLinks.style.display = "none";
                navLinks.classList.remove('show');
                barsIcon.style.display = 'block';
                xMarkIcon.style.display = 'none';
                logoutButton.style.display = 'none';
            }
        }
        
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



<!-- <div class="dropdown-content">
                    <a href="">Christmas</a>
                    <a href="">Valentine</a>
                    <a href="">Sunday Lunch</a>
                </div> -->