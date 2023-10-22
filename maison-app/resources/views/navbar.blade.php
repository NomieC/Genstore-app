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
            <a href="">About Maison</a>
            <div class="dropdown">
                <button class="dropbtn">Menus</button>
                <div class="dropdown-content">
                    <a href="">Dining</a>
                    <a href="">Grill</a>
                    <a href="">Afternoon Tea</a>
                    <a href="">Bar</a>
                </div>
            </div>
            <a href="/hours-location">Hours & Location</a>
            <a href="/book-now">Book Now</a>
            <a href="/sign-up" class="btn-sign-up">Sign up</a>
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