<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" >

    {{-- script --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/home.js')}}"></script>



</head>
<body>
    
    <header class="parallax" data-parallax="scroll">
        <nav class="fixed-navbar">
            <h1 class="logo">
                <a href="/"><img src="{{asset("assets/crop-logo.png")}}" style="width: 300px" alt="Logo"></a>
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
        <a href="" class="header-title"><img src="{{asset('assets/logo.jpeg')}}" alt=""></a>
        {{-- <div class="header-bottom">
            <p class="today-date">3 <span>/12</span></p>
            <ul class="social-media">
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
                <li><a href="">Youtube</a></li>
            </ul>
        </div> --}}
    </header>

    <div class="wrapper">
        <div class="content">
          <header class="header">
            <div class="layers">
              <div class="layer-title">
                <div class="subtitle">Welcome to</div>
                <div class="title">Maison de l'Anglais</div>
                <p class="article-text" style="text-align: center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis
                    error provident dignissimos facere. Repellendus tempore autem qui!
                    Quia magnam tempora esse id necessitatibus corrupti mollitia
                    expedita sapiente cum rerum, ut dicta laboriosam!
                  </p>
              </div>
            </div>
        </div>
      </div>

      <header class="parallax-intro" data-parallax="scroll">
        <div class="intro-text">Maison de l'Anglais was built by a dedicated team of students wishing to get an A</div>
    </header>

    {{-- miscellaneous --}}
    
    <section id="misc">
        <div class="misc-container">
            <div class="misc-image-box " >
                <div class="image-container">
                    <img class="misc-img1" src="{{asset("assets/authentic.jpg")}}" alt="image">
                </div>
                <div class="image-container">
                    <img class="misc-img2" src="{{asset("assets/fresh.jpg")}}" alt="image">
                </div>
                <div class="image-container">
                    <img class="misc-img3" src="{{asset("assets/unique.jpg")}}" alt="image">
                </div>
            </div>
            
            <div class="misc-text-box " >
                    
                <div id="first" class="right-block-misc">
                    <img class="mobile-view-misc1" src="{{asset("assets/authentic.jpg")}}" alt="">
                    <h2 class="misc-title">authentic english food</h2>
                    <p class="misc-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat tempora dignissimos quis repellendus nihil dolorem aliquam quod explicabo fugit similique voluptatem voluptatibus fuga, id soluta omnis eius eligendi cum!</p>
                    <p class="misc-normaltext">Indulge in the exquisite taste of our handcrafted dishes made with the finest ingredients. From classic English breakfasts to hearty pub favorites, our menu is carefully curated to satisfy your cravings and transport you to the charming streets of England.</p>
                </div>
                
                <div id="second" class="right-block-misc">
                    <img class="mobile-view-misc2" src="{{asset("assets/fresh.jpg")}}" alt="">
                    <h2 class="misc-title">quality of products</h2>
                    <p class="misc-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat tempora dignissimos quis repellendus nihil dolorem aliquam quod explicabo fugit similique voluptatem voluptatibus fuga, id soluta omnis eius eligendi cum!</p>
                    <p class="misc-normaltext">At Maison de l'Anglais, quality is our utmost priority. We source only the freshest and highest-quality ingredients to create our culinary masterpieces. Every dish is crafted with precision and care, ensuring that you savor the authentic flavors and enjoy a dining experience that exceeds your expectations.</p>
                </div>
                
                <div id="third" class="right-block-misc">
                    <img class="mobile-view-misc3" src="{{asset("assets/unique.jpg")}}" alt="">
                    <h2 class="misc-title">unique flavors</h2>
                    <p class="misc-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat tempora dignissimos quis repellendus nihil dolorem aliquam quod explicabo fugit similique voluptatem voluptatibus fuga, id soluta omnis eius eligendi cum!</p>
                    <p class="misc-normaltext">Discover a world of flavors that harmoniously come together to create distinctive and memorable dishes. Our chefs, inspired by global cuisines, infuse creativity into every recipe, ensuring that each bite is a burst of unique tastes and textures. Immerse yourself in our culinary creations and embark on a gastronomic journey that celebrates the diversity of flavors.</p>
                </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="satu"></div>
            <div class="dua">
                <div class="grid-text-container">
                    <h1 class="grid-title">About Us</h1>
                    <p class="grid-normaltext">Welcome to Maison, where culinary excellence meets warm hospitality. At Maison, we believe in the power of delightful dining experiences. Our chefs, inspired by global flavors and local ingredients, craft dishes that tantalize taste buds and create lasting memories.</p>
                </div>
            </div>
            <div class="tiga"></div>
            <div class="empat">
                <div class="grid-text-container">
                    <h1 class="grid-title">Our Mission</h1>
                    <p class="grid-normaltext">We are dedicated to providing high-quality products and excellent customer service to enhance your experience.</p>
                </div>
            </div>
            <div class="lima"></div>
            <div class="enam"></div>
            <div class="tujuh">
                <div class="grid-text-container">
                    <h1 class="grid-title">Our Values</h1>
                    <p class="grid-normaltext">We uphold integrity, innovation, and customer satisfaction as our core values in every aspect of our business.</p>
                </div>
            </div>
            <div class="delapan"></div>
            <div class="sembilan"></div>
            <div class="sepuluh">
                <div class="grid-text-container">
                    <h1 class="grid-title">Community Engagement</h1>
                    <p class="grid-normaltext">We actively participate in community events and support local initiatives to give back to the community that supports us.</p>
                </div>
            </div>
            <div class="sebelas">
                <div class="grid-text-container">
                    <h1 class="grid-title">Visit Us</h1>
                    <p class="grid-normaltext">Come and experience our restaurant located in the heart of the city.</p>
                </div>
            </div>
            <div class="duabelas"></div>
            <div class="tigabelas">
                <div class="grid-text-container">
                    <h1 class="grid-title">Awards</h1>
                    <p class="grid-normaltext">We've been honored with prestigious awards for our culinary excellence and sustainable practices.</p>
                </div>
            </div>
          </div>
        
    </section>

    {{-- About --}}
    <section id="about">
        <div class="about-container">
            <h1 style="text-align: center; margin-bottom: 80px">Our Courses</h1>
            <div class="image-gallery">
                <div class="image-box">
                    <img src="{{asset("assets/breakfast.jpg")}}" alt="image">
                    <h2 class="theme">P</h2>
                </div>
                <div class="image-box">
                    <img src="{{asset("assets/pastry.jpg")}}" alt="image">
                    <h2 class="theme">A</h2>
                </div>
                <div class="image-box">
                    <img src="{{asset("assets/tea.jpg")}}" alt="image">
                    <h2 class="theme">R</h2>
                </div>
                <div class="image-box">
                    <img src="{{asset("assets/wine.jpg")}}" alt="image">
                    <h2 class="theme">L</h2>
                </div>
            </div>
            <div class="about-info">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo aliquam natus minus molestias? Adipisci labore, sunt libero quam sequi temporibus quaerat. Rem, quo quis dolorem et modi atque deserunt hic!
            </div>
        </div>
    </section>

    <footer>
        ini percobaan footer
    </footer>
</body>
<script>
    window.addEventListener('scroll', function() {
        var nav = document.querySelector('.fixed-navbar');
        if (window.scrollY > 0) {
            nav.classList.add('fixed');
        } else {
            nav.classList.remove('fixed');
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
    const scrollDuration = 1000; // Duration of the scrolling animation in milliseconds
    const scrollStep = -30; // Number of pixels to scroll on each step

    function smoothScroll(targetPosition) {
        let currentPosition = window.pageYOffset;
        const distance = targetPosition - currentPosition;
        let startTime = null;

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const ease = Math.sqrt(Math.min(1, timeElapsed / scrollDuration));

            window.scrollTo(0, currentPosition + ease * distance);

            if (timeElapsed < scrollDuration) {
                requestAnimationFrame(animation);
            } else {
                window.scrollTo(0, targetPosition);
            }
        }

        requestAnimationFrame(animation);
    }

    // Smooth scroll to the target element when a link is clicked
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                const targetPosition = targetElement.offsetTop;
                smoothScroll(targetPosition);
            }
        });
    });
});

    
</script>
</html>

